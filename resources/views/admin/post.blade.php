@extends('layouts.admin')

@section('description', 'Halkın Kalemi Admin')
@section('title', 'Halkın Kalemi Admin')


@section('content')
    <div class="wrap">
        <section class="app-content">
            <div class="row">
                <!-- DOM dataTable -->
                <div class="col-md-12">
                    <div class="widget">

                        <header class="widget-header">
                            <h4 class="widget-title">Yazılar</h4>
                        </header><!-- .widget-header -->
                        <a href="{{route('admin_post_create')}}"> <button type="submit" class="btn btn-success">Yeni Ekle</button></a>

                        <hr class="widget-separator">

                        <div class="widget-body">
                            <div class="table-responsive">
                                <table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Görsel</th>
                                        <th>Başlık</th>
                                        <th>Yazar</th>
                                        <th>Kategori</th>
                                        <th>Durum</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Görsel</th>
                                        <th>Başlık</th>
                                        <th>Yazar</th>
                                        <th>Kategori</th>
                                        <th>Durum</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </tfoot>

                                    <tbody>
                                    @foreach($datalist as $data)
                                        <tr>
                                            <td>@if($data->thumb)<img src="{{Storage::url($data->thumb)}}"  width="40" alt="">@endif</td>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->user->name}}</td>
                                            <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</td>
                                            <td>{{$data->status}}</td>
                                            <td>
                                                <a href="{{route('admin_post_destroy',$data->id)}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                                <a href="{{route('admin_post_edit',$data->id)}}"><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- .widget-body -->
                    </div><!-- .widget -->
                </div><!-- END column -->
            </div><!-- .row -->
        </section><!-- .app-content -->
    </div><!-- .wrap -->
@endsection
