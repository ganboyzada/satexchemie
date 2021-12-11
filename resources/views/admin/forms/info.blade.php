<div class="card-header">
                                <h5>Redaktə et</h5><span>Aşağıdakı tələb olunan xanaları doldurun və 'Yadda saxla' düyməsini sıxın.</span>
                            </div>
                            <div class="card-body admin-list">
                                <form class="theme-form store-form" action="{{ route('admin.infos.update', $item->id) }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="mb-2">
                                        <div class="col-form-label">İnformasiya tipi</div>
                                        <select class="js-example-basic-single col-sm-12" name="type" required>
                                            @php
                                            $m_item = $item;
                                            @endphp
                                            @foreach(\App\Models\Content::select('type')->distinct()->get() as $item)
                                                <option value="{{ $item->type }}" @if($m_item->type == $item->type) selected="" @endif>{{ $item->type }}</option>
                                            @endforeach
                                        </select>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Ad | Nömrə | Email </label>
                                        <div class="col-sm-9">
                                        <input class="form-control" type="text" value="{{ $m_item->name }}" placeholder="nümunə" name="name" data-bs-original-title="">
                                        </div>
                                    </div>
                                    
                                    @foreach(['az', 'en', 'ru', 'de'] as $lang)
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Kontent ({{ strtoupper($lang) }})</label>
                                        <div class="col-sm-9">
                                        <input class="form-control" type="text" value="{{ $m_item->{'value_'.$lang} }}" placeholder="nümunə" name="value_{{ $lang }}" data-bs-original-title="">
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Link (lazım olduqda)</label>
                                        <div class="col-sm-9">
                                        <input class="form-control" type="text" value="{{ $m_item->link }}" placeholder="nümunə" name="link" data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Şəkil (.jpg, .png) (lazım olduqda)</label>
                                        <div class="col-sm-9 d-flex">
                                            <input class="form-control w-75" id="file_upload" type="file" name="img" data-bs-original-title="">
                                            <a onclick="$('#file_upload').click()" class="btn btn-primary d-inline-flex justify-content-center align-items-center" data-bs-original-title="" title=""><i class="fa fa-camera"></i></a>    
                                        </div>
                                        @if($m_item->img != null)
                                            <img src="{{ $m_item->img }}" height="100">
                                        @endif
                                        
                                    </div>
                                
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-primary" onclick="$('.store-form').submit()" data-bs-original-title="" title="">Yadda saxla</button>
                                {{--<button class="btn btn-secondary" data-bs-original-title="" title="">Cancel</button>--}}
                            </div>