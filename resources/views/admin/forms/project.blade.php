<div class="card-header">
                            <h5>Redaktə et</h5><span>Aşağıdakı tələb olunan xanaları doldurun və 'Yadda saxla' düyməsini sıxın.</span>
                        </div>
                        <div class="card-body admin-list">
                            <form class="theme-form store-form" action="{{ route('admin.projects.update', $item->id) }}" 
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-3">Önə çıxsın</div>
                                    <div class="col-3 switch">
                                        <label class="switch">
                                            <input class="form-check-input" @if($item->featured) checked @endif type="checkbox" id="flexSwitchCheckDefault" name="featured">
                                            <span class="switch-state"></span>
                                        </label>
                                    </div> 
                                </div>
                                <div class="mb-2">
                                    <div class="col-form-label">Kateqoriyası</div>
                                    <select class="js-example-basic-single col-sm-12" name="category">
                                
                                        @foreach(\App\Models\Navigation::where('parent_id', null)->where('is_categ', true)->get() as $category)

                                        @php
                                            $subcategories = \App\Models\Navigation::where('parent_id', $category->id)->get();
                                        @endphp

                                        @if(count($subcategories)>0)
                                        <optgroup label="{{ $category->name_az }}">
                                            @foreach($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}" @if($item->categ_id == $subcategory->id) selected="" @endif>{{ $subcategory->name_az }}</option>
                                            @endforeach
                                        </optgroup>
                                        @else
                                        <option value="{{ $category->id }}" @if($item->categ_id == $category->id) selected="" @endif>{{ $category->name_az }}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                </div><br>

                                @foreach(['az', 'en', 'ru', 'de'] as $lang)
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Adı ({{ strtoupper($lang) }})</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" value="{{ $item->{'name_'.$lang} }}"  type="text" placeholder="nümunə" name="name_{{ $lang }}" data-bs-original-title="" title="">
                                    </div>
                                </div>
                                @endforeach

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Qiymət (₼-la)</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" type="number" value="{{ $item->price }}" placeholder="0 ₼" name="price" data-bs-original-title="" title="">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Şəkil (.jpg, .png)</label>
                                    <div class="col-sm-9 d-flex">
                                        <input class="form-control w-75" id="file_upload" type="file" name="img" data-bs-original-title="">
                                        <a onclick="$('#file_upload').click()" class="btn btn-primary d-inline-flex justify-content-center align-items-center" data-bs-original-title="" title=""><i class="fa fa-camera"></i></a>    
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        @if($item->thumb != null)
                                        <img src="{{ asset($item->thumb) }}" height="100">
                                        @else
                                        <span class="text-warning d-inline-flex">
                                            <i data-feather="alert-triangle" style="margin-right: 5px;"></i>
                                            Şəkil yoxdur
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Digər şəkillər (Topdan yükləmə) (.jpg, .png)</label>
                                    <div class="col-sm-9 d-flex">
                                        <input class="form-control w-75" id="file_upload2" type="file" name="images[]" data-bs-original-title="" multiple>
                                        <a onclick="$('#file_upload2').click()" class="btn btn-primary d-inline-flex justify-content-center align-items-center" data-bs-original-title="" title=""><i class="fa fa-camera"></i></a>    
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        @php
                                            $project_photos = \App\Models\ProjectPhoto::where('project_id', $item->id)->get();
                                        @endphp

                                        @if(count($project_photos)>0)
                                        @foreach($project_photos as $image)
                                        <div class="photo-box d-inline-flex position-relative">
                                            <img src="{{ asset($image->img) }}" height="80">
                                            <button class="btn m-1 py-1 px-0 w-25 text-center btn-danger justify-content-center position-absolute fixed-top photo_deleter" data-routename="projects" data-id="{{ $image->id }}"><i height="15" width="15" data-feather="x"></i></button>
                                        </div>
                                        @endforeach
                                        @else
                                        <span class="text-warning d-inline-flex">
                                            <i data-feather="alert-triangle" style="margin-right: 5px;"></i>
                                            Şəkil yoxdur
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                            
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-primary" onclick="$('.store-form').submit()" data-bs-original-title="" title="">Yadda saxla</button>
                            {{--<button class="btn btn-secondary" data-bs-original-title="" title="">Cancel</button>--}}
                        </div>