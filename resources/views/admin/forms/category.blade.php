<div class="card-header">
                            <h5>Redaktə et</h5><span>Aşağıdakı tələb olunan xanaları doldurun və 'Yadda saxla' düyməsini sıxın.</span>
                        </div>
                        <div class="card-body admin-list">
                            <form class="theme-form store-form" action="{{ route('admin.categories.update', $item->id) }}"
                            enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="mb-2">
                                    <div class="col-form-label">Üst kateqoriyası</div>
                                    <select class="js-example-basic-single col-sm-12" name="category">
                                    <option value=""></option>
                                        @foreach(\App\Models\Navigation::where('is_categ', true)->where('parent_id', null)->get() as $category)
                                            <option value="{{ $category->id }}" @if($item->parent_id == $category->id) selected="" @endif>{{ $category->name_az }}</option>
                                        @endforeach
                                    </select>
                                </div><br>

                                @foreach(['az', 'en', 'ru', 'de'] as $lang)
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Adı ({{ strtoupper($lang) }})</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" value="{{ $item->{'name_'.$lang} }}" type="text" placeholder="nümunə" name="name_{{ $lang }}">
                                    </div>
                                </div>
                                @endforeach

                                @foreach(['az', 'en', 'ru', 'de'] as $lang)
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Açıqlama ({{ strtoupper($lang) }})</label>
                                    <div class="col-sm-9">
                                    <textarea class="form-control" type="text" placeholder="nümunə" name="desc_{{ $lang }}" data-bs-original-title="" title="">{!! $item->{'desc_'.$lang} !!}</textarea>
                                    </div>
                                </div>
                                @endforeach
                            
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Şəkil (.jpg, .png)</label>
                                    <div class="col-sm-9 d-flex">
                                        <input class="form-control w-75" id="file_upload" type="file" name="img" data-bs-original-title="">
                                        <a onclick="$('#file_upload').click()" class="btn btn-primary d-inline-flex justify-content-center align-items-center" data-bs-original-title="" title=""><i class="fa fa-camera"></i></a>    
                                    </div>
                                    @if($item->img!=null)
                                    <div class="col-sm-12 mt-3">
                                        <img src="{{ asset($item->img) }}" height="100">
                                    </div>
                                    @endif
                                </div>
                            
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-primary" onclick="$('.store-form').submit()" data-bs-original-title="" title="">Yadda saxla</button>
                            {{--<button class="btn btn-secondary" data-bs-original-title="" title="">Cancel</button>--}}
                        </div>