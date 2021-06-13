@extends('layouts.admin')

@section('description', 'Halkın Kalemi Admin')
@section('title', 'Halkın Kalemi Admin')


@section('content')
    <div class="col-md-12">
        <h4 class="m-h-lg">Site Ayarları</h4>
        @foreach($datalist as $datalist)
        <form class="form-horizontal" action="{{route('admin_setting_update', $datalist->id)}}" method="post" enctype="multipart/form-data">
            @csrf


        <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading-1">
                    <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                        <h4 class="panel-title">Genel Ayarlar</h4>
                        <i class="fa acc-switch"></i>
                    </a>
                </div>
                <div id="collapse-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-1">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Logo:</label>
                            <div class="col-sm-6">
                                @if($datalist->logo)
                                    <img src="{{Storage::url($datalist->logo)}}"  width="60" alt="">
                                @endif
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Favicon:</label>
                            <div class="col-sm-6">
                                @if($datalist->favicon)
                                    <img src="{{Storage::url($datalist->favicon)}}"  width="60" alt="">
                                @endif
                                <input type="file" class="form-control" id="favicon" name="favicon">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Title:</label>
                            <div class="col-sm-6">

                                <input type="text" class="form-control" id="title" name="title" value="{{$datalist->title}}">


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Anahtar Kelimeler:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="keywords" name="keywords" value="{{$datalist->keywords}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Site Açıklaması</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="description" name="description" value="{{$datalist->description}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Firma Adı:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="company" name="company" value="{{$datalist->company}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading-2">
                    <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                        <h4 class="panel-title">İletişim Ayarları</h4>
                        <i class="fa acc-switch"></i>
                    </a>
                </div>
                <div id="collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Adres:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="address" name="address" value="{{$datalist->address}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Telefon:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="phone" name="phone" value="{{$datalist->phone}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Fax:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="fax" name="fax" value="{{$datalist->fax}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">E-Mail:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="email" name="email" value="{{$datalist->email}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading-3">
                    <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                        <h4 class="panel-title">Sosyal Medya Ayarları</h4>
                        <i class="fa acc-switch"></i>
                    </a>
                </div>
                <div id="collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-3">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Facebook:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="facebook" name="facebook" value="{{$datalist->facebook}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Twitter:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="twitter" name="twitter" value="{{$datalist->twitter}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">İnstagram:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="instagram" name="instagram" value="{{$datalist->instagram}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Youtube:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="youtube" name="youtube" value="{{$datalist->youtube}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading-4">
                    <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                        <h4 class="panel-title">SMTP Mail Ayarları</h4>
                        <i class="fa acc-switch"></i>
                    </a>
                </div>
                <div id="collapse-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-4">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">SMTP Server:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="smtpserver" name="smtpserver" value="{{$datalist->smtpserver}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">SMTP E-Mail:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="smtpemail" name="smtpemail" value="{{$datalist->smtpemail}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">SMTP Şifre:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="smtppassword" name="smtppassword" value="{{$datalist->smtppassword}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">SMTP Port:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="smtpport" name="smtpport" value="{{$datalist->smtpport}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading-4">
                    <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                        <h4 class="panel-title">Hakkımızda</h4>
                        <i class="fa acc-switch"></i>
                    </a>
                </div>
                <div id="collapse-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-4">
                    <div class="panel-body">

                        <div class="form-group">
                            <textarea class="form-control" name="aboutus" id="summernote">{{$datalist->aboutus}}</textarea>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- panel-group -->
            <div class="row">
                <div class="col-sm-12 ">
                    <button type="submit" class="btn btn-success">Comment</button>
                </div>
            </div>
    @endforeach
        </form>
    </div>

@endsection
