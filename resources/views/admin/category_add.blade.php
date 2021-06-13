@extends('layouts.admin')

@section('description', 'Halkın Kalemi Admin')
@section('title', 'Halkın Kalemi Admin')


@section('content')
    <section class="app-content">
        <div class="row">
    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title">Kategori Ekleme</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                <form class="form-horizontal" action="{{route('admin_category_store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="select2-demo-1" class="col-sm-3 control-label">Ana Kategori</label>
                        <div class="col-sm-6">
                            <select id="select2-demo-1" name="parent_id" class="form-control" data-plugin="select2">
                                <option value="0">ANA KATEGORİ</option>
                                @foreach($datalist as $data)
                                <option value="{{$data->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}</option>
                                @endforeach
                            </select>
                        </div><!-- END column -->
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label for="exampleTextInput1" class="col-sm-3 control-label">Kategori Adı</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="exampleTextInput1" name="title" placeholder="Kategori adı">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextInput1" class="col-sm-3 control-label">Açıklama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="exampleTextInput1" name="detail" placeholder="Açıklama girin">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select2-demo-1" class="col-sm-3 control-label">Durum</label>
                        <div class="col-sm-6">
                            <select id="select2-demo-1" name="status" class="form-control" data-plugin="select2">
                                <option value="True">AKTİF</option>
                                <option value="False">PASİF</option>
                            </select>
                        </div><!-- END column -->
                    </div><!-- .form-group -->

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="checkbox-demo-2"/>
                                <label for="checkbox-demo-2">View my email</label>
                            </div>
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
