<div class="card-header">
                            <h5>Redaktə et</h5><span>Aşağıdakı tələb olunan xanaları doldurun və 'Yadda saxla' düyməsini sıxın.</span>
                        </div>
                        <div class="card-body admin-list">
                            <form class="theme-form store-form" action="{{ route('admin.photos.update', $item->id) }}" 
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="mb-2">
                                    <div class="col-form-label">Kateqoriyası</div>
                                    <select class="js-example-basic-single col-sm-12" name="category">
                                
                                        @foreach(\App\Models\Navigation::where('parent_id', null)->get() as $category)

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
                                    <input class="form-control" value="{{ $item->{'name_'.$lang} }}"  type="text" placeholder="nümunə" name="name_{{ $lang }}">
                                    </div>
                                </div>
                                @endforeach

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Şəkil (.jpg, .png)</label>
                                    <div class="col-sm-9 d-flex">
                                        <input class="form-control w-75" id="file_upload" type="file" name="img" data-bs-original-title="">
                                        <a onclick="$('#file_upload').click()" class="btn btn-primary d-inline-flex justify-content-center align-items-center" data-bs-original-title="" title=""><i class="fa fa-camera"></i></a>    
                                    </div>
                                    <div class="col-sm-12">
                                        <img src="{{ asset($item->thumb) }}" height="100">
                                    </div>
                                </div>
                                
                            
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-primary" onclick="$('.store-form').submit()" data-bs-original-title="" title="">Yadda saxla</button>
                            {{--<button class="btn btn-secondary" data-bs-original-title="" title="">Cancel</button>--}}
                        </div>