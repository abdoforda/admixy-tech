<!-- Contact Section Start -->
<section class="contact-section-6">
    <div class="container">
        <div class="contact-wrapper-6">
            <div class="plane-shape float-bob-y">
                <img src="{{ asset('assets/img/plane-shape.png') }}" alt="img">
            </div>

            <div class="section-title text-center">
                <span class="wow fadeInUp">Contact Us</span>
                <h2 class="char-animation">Let Us Take Your Product <br> To The Next Level</h2>
            </div>

            <form action="{{ route('contact.post') }}" method="POST" id="contact-form" class="contact-form-box" novalidate>
                @csrf
                <div class="row g-4 align-items-center justify-content-center">

                    <!-- First Name -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="form-clt">
                            <input type="text" name="first_name" id="first_name" placeholder="First Name *" required>
                            <div class="field-error" data-error-for="first_name"></div>
                        </div>
                    </div>

                    <!-- Last Name -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="form-clt">
                            <input type="text" name="last_name" id="last_name" placeholder="Last Name">
                            <div class="field-error" data-error-for="last_name"></div>
                        </div>
                    </div>

                    <!-- Company Name -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="form-clt">
                            <input type="text" name="company_name" id="company_name" placeholder="Company Name *" required>
                            <div class="field-error" data-error-for="company_name"></div>
                        </div>
                    </div>

                    <!-- Operating Country/Region (Select) -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="form-clt">
                            <select name="country" id="country" required >
                                <option value="" disabled selected>Operating Country/Region *</option>
                                <option value="United Arab Emirates - الإمارات">United Arab Emirates (الإمارات)</option>
                                <option value="Saudi Arabia - السعودية">Saudi Arabia (السعودية)</option>
                                <option value="Qatar - قطر">Qatar (قطر)</option>
                                <option value="Kuwait - الكويت">Kuwait (الكويت)</option>
                                <option value="Bahrain - البحرين">Bahrain (البحرين)</option>
                                <option value="Oman - عُمان">Oman (عُمان)</option>
                                <option value="Egypt - مصر">Egypt (مصر)</option>
                                <option value="Jordan - الأردن">Jordan (الأردن)</option>
                                <option value="United Kingdom - المملكة المتحدة">United Kingdom (المملكة المتحدة)</option>
                                <option value="United States - الولايات المتحدة">United States (الولايات المتحدة)</option>
                                <option value="Europe - أوروبا">Europe (أوروبا)</option>
                                <option value="OTHER">Other Country</option>
                            </select>
                            <div class="field-error" data-error-for="country"></div>
                        </div>
                    </div>

                    <!-- Website URL -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="form-clt">
                            <input type="url" name="website" id="website" placeholder="Website URL *" required>
                            <div class="field-error" data-error-for="website"></div>
                        </div>
                    </div>

                    <!-- Volume Per Month (Select) -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="form-clt">
                            <select name="volume" id="volume" required>
                                <option value="" disabled selected>Volume Per Month *</option>
                                <option value="0-100k">Less than $100,000</option>
                                <option value="100k-500k">$100,000 - $500,000</option>
                                <option value="500k-1m">$500,000 - $1,000,000</option>
                                <option value="1m-5m">$1,000,000 - $5,000,000</option>
                                <option value="5m+">$5,000,000+</option>
                            </select>
                            <div class="field-error" data-error-for="volume"></div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay=".7s">
                        <div class="form-clt">
                            <input type="email" name="email" id="email" placeholder="Email Address *" required>
                            <div class="field-error" data-error-for="email"></div>
                        </div>
                    </div>

                    <!-- Checkboxes: I'm Interested in -->
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".75s">
                        <div style="background: rgba(255,255,255,0.05); padding: 25px; border-radius: 12px; text-align: left;">
                            <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 5px;">I’m interested in</h4>
                            <p style="font-size: 14px; opacity: 0.8; margin-bottom: 20px;">Please select all that apply</p>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <input type="checkbox" id="c1" name="interest[]" value="Banking / IBANs" style="width: 18px; height: 18px; margin-right: 10px; cursor: pointer;">
                                        <label for="c1" style="cursor: pointer; margin-bottom: 0;">Banking / IBANs</label>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <input type="checkbox" id="c2" name="interest[]" value="Card Processing" style="width: 18px; height: 18px; margin-right: 10px; cursor: pointer;">
                                        <label for="c2" style="cursor: pointer; margin-bottom: 0;">Card Processing</label>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <input type="checkbox" id="c3" name="interest[]" value="FX Services" style="width: 18px; height: 18px; margin-right: 10px; cursor: pointer;">
                                        <label for="c3" style="cursor: pointer; margin-bottom: 0;">FX Services</label>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <input type="checkbox" id="c4" name="interest[]" value="Crypto Payment Solutions" style="width: 18px; height: 18px; margin-right: 10px; cursor: pointer;">
                                        <label for="c4" style="cursor: pointer; margin-bottom: 0;">Crypto Payment Solutions</label>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <input type="checkbox" id="c5" name="interest[]" value="Alternative Payment Methods" style="width: 18px; height: 18px; margin-right: 10px; cursor: pointer;">
                                        <label for="c5" style="cursor: pointer; margin-bottom: 0;">Alternative Payment Methods</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <input type="checkbox" id="c6" name="interest[]" value="Partnership" style="width: 18px; height: 18px; margin-right: 10px; cursor: pointer;">
                                        <label for="c6" style="cursor: pointer; margin-bottom: 0;">Partnership</label>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <input type="checkbox" id="c7" name="interest[]" value="Introducer Program" style="width: 18px; height: 18px; margin-right: 10px; cursor: pointer;">
                                        <label for="c7" style="cursor: pointer; margin-bottom: 0;">Introducer Program</label>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <input type="checkbox" id="c8" name="interest[]" value="Others" style="width: 18px; height: 18px; margin-right: 10px; cursor: pointer;">
                                        <label for="c8" style="cursor: pointer; margin-bottom: 0;">Others</label>
                                    </div>
                                </div>
                            </div>
                            <div class="field-error" data-error-for="interest"></div>
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".8s">
                        <div class="form-clt">
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                            <div class="field-error" data-error-for="message"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".8s">
                        <div class="g-recaptcha" data-sitekey="6LeRiJgtAAAAAIkpCOie_1Ys2-vttQPvmpglRXIo"></div>
                        <div class="field-error" data-error-for="g-recaptcha-response"></div>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                        <div class="contact-button text-center">
                            <button type="submit" class="theme-btn">
                                <span class="submit-text">Submit</span>
                                <i class="far fa-arrow-right"></i>
                            </button>
                            <div id="contact-form-status" class="form-status" role="status" aria-live="polite"></div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>
<!-- Contact Section End -->
