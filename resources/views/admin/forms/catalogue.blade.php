<div class="card-header">
                            <h5>Redaktə et</h5><span>Aşağıdakı tələb olunan xanaları doldurun və 'Yadda saxla' düyməsini sıxın.</span>
                        </div>
                        <div class="card-body admin-list">
                            <form class="theme-form store-form" action="{{ route('admin.catalogues.update', $item->id) }}" 
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                
                                @foreach(['az', 'en', 'ru', 'de'] as $lang)
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Adı ({{ strtoupper($lang) }})</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" value="{{ $item->{'name_'.$lang} }}"  type="text" placeholder="nümunə" name="name_{{ $lang }}" data-bs-original-title="" title="">
                                    </div>
                                </div>
                                @endforeach

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Şəkil (.jpg, .png)</label>
                                    <div class="col-sm-9 d-flex">
                                        <input class="form-control w-75" id="file_upload" type="file" name="img" data-bs-original-title="">
                                        <a onclick="$('#file_upload').click()" class="btn btn-primary d-inline-flex justify-content-center align-items-center" data-bs-original-title="" title=""><i class="fa fa-camera"></i></a>    
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <img src="{{ asset($item->img) }}" height="100">
                                    </div>
                                </div>
                                
                                <div class="mb-3 row">
                                    <label class="col-sm-12 col-form-label">Kataloq dokumenti (.pdf, .docx, url)</label>
                                    
                                    <div class="col-sm-12 mb-1">
                                        <div class="row">
                                            <div class="col-4">
                                                <label class="text-warning" for="link">Veb səhifəyə yönləndirmə</label>
                                            </div>
                                            <div class="col-8">
                                                <input class="form-control" @if(str_contains($item->pdf, 'http')) value="{{ $item->pdf }}" @endif type="text" placeholder="https://www.example.com/document" name="link" data-bs-original-title="" title="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4 mb-2">
                                                <label class="text-warning" for="pdf">və ya Dokument fayl yükləmə</label>
                                            </div>
                                            <div class="col-sm-8 d-flex">
                                                <input class="form-control w-75" id="file_upload2" type="file" name="pdf" data-bs-original-title="">
                                                <a onclick="$('#file_upload2').click()" class="w-25 btn btn-dark d-inline-flex justify-content-center align-items-center" data-bs-original-title="" title=""><i class="fa fa-camera"></i></a>    
                                            </div>
                                            @if(!str_contains($item->pdf, 'http'))
                                            @if($item->pdf != null)
                                            <div class="col-sm-12 mt-3">
                                                <a class="btn btn-primary" target="_blank" href="{{ asset($item->pdf) }}">Dokumenti aç</a>
                                            </div>
                                            @endif
                                            @endif
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Brend adı</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" value="{{ $item->company }}" type="text" placeholder="Company X..." name="company" data-bs-original-title="" title="">
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-primary" onclick="$('.store-form').submit()" data-bs-original-title="" title="">Yadda saxla</button>
                            {{--<button class="btn btn-secondary" data-bs-original-title="" title="">Cancel</button>--}}
                        </div>