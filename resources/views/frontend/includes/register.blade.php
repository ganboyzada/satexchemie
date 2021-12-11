<form class="form-box" method="POST" action="{{ route('register') }}">
                @csrf
                  
                  <p>{{ __('main.register_intro') }}</p><br>
                  <div class="form-group">
                    <div class="entry-box">
                        <label class="col-form-label pt-0">{{ __('main.form.fullname') }}</label>
                        <input class="form-control" type="text" name="name" required placeholder="Tam ad">
                    </div>
                  </div>

                  <div class="form-group">
                      <div class="entry-box">
                        <label class="col-form-label">{{ __('main.form.email') }}</label>
                        <input class="form-control" type="email" name="email" required placeholder="xxx@xxx.az">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="entry-box">
                        <label class="col-form-label">{{ __('main.form.password') }}</label>
                        <input class="form-control" type="password" name="password" required="" placeholder="*********">
                    </div>
                  </div>
                  <div class="form-group">
                      <div class="entry-box">
                        <label class="col-form-label">{{ __('main.form.confirm_password') }}</label>
                        <input class="form-control" type="text" name="password_confirmation" required="" placeholder="təsdiq edin">
                    </div>
                  </div>
                  <div class="text-right d-flex align-items-center justify-content-end flex-wrap mb-2">
                      {{ __('main.form.q_have_account') }}<a class="btn-login inside">{{ __('main.form.login') }}</a>
                        <div class="image-zoom w-auto d-inline-block move-circle">
                            <input type="submit" value="{{ __('main.form.register') }}" class="v-light">
                        <div class="icon-circle"></div></div>
                    </div>
                  
                  {{--
                  <h6 class="text-muted mt-4 or">Or signup with</h6>
                  <div class="social mt-4">
                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                  </div>
                  --}}
                  
                </form>