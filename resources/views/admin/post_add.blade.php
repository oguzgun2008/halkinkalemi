@extends('layouts.admin')

@section('description', 'Halkın Kalemi Admin')
@section('title', 'Halkın Kalemi Admin')
@section('javascript')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection



@section('content')
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Yazı Ekleme</h4>
                    </header><!-- .widget-header -->
                    <hr class="widget-separator">
                    <div class="widget-body">

                        <form class="form-horizontal" action="{{route('admin_post_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="select2-demo-1" class="col-sm-2 control-label">Kategori</label>
                                <div class="col-sm-6">
                                    <select id="select2-demo-1" name="category_id" class="form-control" data-plugin="select2">
                                        @foreach($datalist as $data)
                                            <option value="{{$data->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- END column -->
                            </div><!-- .form-group -->

                            <div class="form-group">
                                <label for="exampleTextInput1" class="col-sm-2 control-label">Başlık</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="exampleTextInput1" name="title" placeholder="Kategori adı">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextInput1" class="col-sm-2 control-label">Detay</label>
                                <div class="col-sm-9">
                                    <textarea id="summernote" name="detail"></textarea>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Resim:</label>
                                <div class="col-sm-6">
                                    <input type="file" class="form-control" name="thumb">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="select2-demo-1" class="col-sm-2 control-label">Durum</label>
                                <div class="col-sm-6">
                                    <select id="select2-demo-1" name="status" class="form-control" data-plugin="select2">
                                        <option value="True">AKTİF</option>
                                        <option value="False">PASİF</option>
                                    </select>
                                </div><!-- END column -->
                            </div><!-- .form-group -->

                            <div class="form-group">
                                <label for="exampleTextInput1" class="col-sm-2 control-label">Etiketler</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="exampleTextInput1" name="tags" placeholder="Etiketler girin">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <button type="submit" class="btn btn-success">Ekle</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- .widget-body -->
                </div><!-- .widget -->
            </div><!-- END column -->
        </div><!-- .row -->
    </section><!-- #dash-content -->
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 100
        });
    </script>
    @endsection

