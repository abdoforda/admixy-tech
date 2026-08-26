<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

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
}
