<form class="form-box" method="POST" action="{{ route('login') }}">
                @csrf
                  
                  <p>{{ __('main.login_intro') }}</p><br>
                  <div class="form-group">
                    <div class="entry-box">
                        <label class="col-form-label">{{ __('main.form.email') }}</label>
                        <input class="form-control" name="email" type="email" required placeholder="aliyev@mail.az" autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                      <div class="entry-box">
                        <label class="col-form-label">{{ __('main.form.password') }}</label>
                        <div class="form-input position-relative">
                        <input class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="*********">
                        <!--<div class="show-hide"><span class="show"></span></div>-->
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="d-flex">
                        
                        
                        <label class="toggle">
                            <input class="toggle__input" type="checkbox" name="remember">
                            <span class="toggle__label">
                            <span class="toggle__text">{{ __('main.form.remember_password') }}</span>
                            </span>
                        </label>
                        @if (Route::has('password.request'))
                        <a  class="ml-auto" href="{{ route('password.request') }}">
                            {{ __('main.form.q_forgot_password') }}
                        </a>
                        @endif
                    </div>
                  </div>
                    
                  
                    <div class="text-right d-flex align-items-center justify-content-end flex-wrap">
                        {{ __('main.form.q_no_account') }}<a class="btn-register inside">{{ __('main.form.register') }}</a>
                        <div class="image-zoom w-auto d-inline-block move-circle">
                            <input type="submit" value="{{ __('main.form.login') }}" class="v-light">
                        <div class="icon-circle"></div></div>
                    </div>
                    <!-- <button class="btn btn-primary btn-block w-100" type="submit">Daxil olun</button> -->
                  
                  {{--
                  <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                  <div class="social mt-4">
                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                  </div>
                  <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p>
                  --}}
</form>