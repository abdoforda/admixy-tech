<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Process\Process;
use Throwable;

class SiteController extends Controller
{
    public function deploy(Request $request)
    {
        $projectPath = base_path();

        $commands = [
            ['git', 'pull']
        ];

        $output = [];

        foreach ($commands as $command) {
            $process = new Process($command, $projectPath);

            $process->setTimeout(300);
            $process->run();

            $output[] = [
                'command' => implode(' ', $command),
                'success' => $process->isSuccessful(),
                'output' => $process->getOutput(),
                'error' => $process->getErrorOutput(),
            ];

            if (!$process->isSuccessful()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Deployment failed',
                    'output' => $output,
                ], 500);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Deployment completed successfully',
            'output' => $output,
        ]);

    }

    public function contactUs(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['nullable', 'string', 'max:100'],
            'company_name' => ['required', 'string', 'max:150'],
            'country' => ['required', 'string', 'in:AE,SA,QA,KW,BH,OM,EG,JO,GB,US,EU,OTHER'],
            'website' => ['required', 'url', 'max:255'],
            'volume' => ['required', 'string', 'in:0-100k,100k-500k,500k-1m,1m-5m,5m+'],
            'email' => ['required', 'email', 'max:255'],
            'interest' => ['nullable', 'array'],
            'interest.*' => ['string', 'max:100'],
            'message' => ['nullable', 'string', 'max:5000'],
        ]);

        $interests = $validated['interest'] ?? [];
        $body = implode("\n", [
            'New contact request',
            '--------------------',
            'First Name: ' . $validated['first_name'],
            'Last Name: ' . ($validated['last_name'] ?? '-'),
            'Company Name: ' . $validated['company_name'],
            'Country/Region: ' . $validated['country'],
            'Website: ' . $validated['website'],
            'Monthly Volume: ' . $validated['volume'],
            'Email: ' . $validated['email'],
            'Interests: ' . (count($interests) ? implode(', ', $interests) : '-'),
            'Message: ' . ($validated['message'] ?? '-'),
        ]);

        try {
            Mail::raw($body, function ($mail) use ($validated) {
                $mail->to('caree@admixy.tech')
                    ->replyTo($validated['email'], $validated['first_name'] . ' ' . ($validated['last_name'] ?? ''))
                    ->subject('New contact request from ' . $validated['company_name']);
            });
        } catch (Throwable $exception) {
            report($exception);

            return response()->json([
                'success' => false,
                'message' => 'Unable to send your message right now. Please try again later.',
            ], 500);
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you. Your message has been sent successfully.',
        ]);
    }
}
