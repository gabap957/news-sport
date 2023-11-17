@extends('be.layout')
@section('content')

<head>
    <link rel="stylesheet" href="{{asset('adminlte/css/album.css')}}">
</head>
<div class="card shadow mb-4 min-height-card">
    <div class="card-header py-3">
        <div>
            <h5 class="m-0 font-weight-bold text-primary">Kho ảnh</h5>
        </div>
        <div>
            <button class="button-33" data-toggle="modal" data-target="#modalinsert"
                style="color: green; background-color: #c2fbd7;" role="button">Thêm</button>
        </div>
    </div>
    <div class="card-body">
        <div class="row mt-3 px-3 align-items-center">
            @foreach($list as $item)
            <div class="col-2 text-center box-album p-4"
                onclick="window.location='{{ URL::route('admin.image.list')}}'">
                <div class="backgroud-album p-1">
                    <div class="box-album-image">
                        <div class="img-folder"><img src="https://img.icons8.com/3d-fluency/94/folder-invoices--v1.png"
                                alt="folder-invoices--v1" />
                        </div>
                    </div>
                    <div class="title-album">
                        {{$item->name}}
                    </div>
                </div>
                <div class="icon-button" onclick="return confirm('bạn có muốn xóa?')"
                    href="{{route('admin.album.delete',['id'=>$item->id])}}">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 20 25" enable-background="new 0 0 20 20" xml:space="preserve">
                        <rect x="-167" y="-33" display="none" fill="#000000" width="198" height="87" />
                        <path
                            d="M-94.121-16.496c-11.089,1.9-20.686,7.267-28.522,13.506c-8.636-7.721-16.153-11.93-16.153-11.93  c-3.606-2.245-8.117-1.625-11.596,0c-3.479,1.623-3.479,6.723,0,7.419c7.631,2.987,14.336,6.938,20.195,11.262  c-10.365,10.313-16.102,20.555-16.102,20.555c-2.243,3.606-1.624,8.117,0,11.596c1.624,3.479,6.725,3.479,7.42,0  c4.057-10.367,9.885-19.044,16.032-26.175c17.801,15.887,25.396,33.257,24.861,27.52c-2.396-13.981-10.298-25.588-18.517-34.281  C-102.291-10.976-89-16.971-94.121-16.496z" />
                        <path
                            d="M-44.747-9.331c-7.393,1.267-13.791,4.845-19.015,9.004C-69.519-5.474-74.53-8.28-74.53-8.28  c-2.404-1.497-5.412-1.083-7.73,0c-2.319,1.082-2.319,4.482,0,4.946c5.087,1.991,9.558,4.625,13.463,7.508  c-6.91,6.875-10.734,13.704-10.734,13.704c-1.495,2.405-1.082,5.412,0,7.731c1.083,2.318,4.483,2.318,4.947,0  c2.705-6.912,6.59-12.697,10.688-17.451c11.868,10.591,16.931,22.171,16.574,18.347C-48.92,17.184-54.188,9.446-59.667,3.65  C-50.194-5.651-41.333-9.647-44.747-9.331z" />
                        <path
                            d="M-6.56-2.748c-5.544,0.95-10.343,3.634-14.261,6.753c-4.318-3.861-8.076-5.965-8.076-5.965  c-1.803-1.123-4.059-0.813-5.798,0c-1.739,0.811-1.739,3.361,0,3.709c3.815,1.493,7.168,3.469,10.097,5.631  c-5.182,5.157-8.051,10.278-8.051,10.278c-1.121,1.803-0.812,4.059,0,5.798c0.813,1.739,3.363,1.739,3.71,0  c2.029-5.184,4.942-9.522,8.016-13.088c8.901,7.943,12.698,16.629,12.431,13.761c-1.198-6.991-5.149-12.794-9.258-17.141  C-10.646,0.012-4-2.986-6.56-2.748z" />
                        <path
                            d="M19.626,0.835c-3.696,0.633-6.895,2.422-9.507,4.502C7.241,2.763,4.735,1.36,4.735,1.36c-1.202-0.749-2.706-0.542-3.865,0  c-1.16,0.541-1.16,2.241,0,2.473c2.543,0.995,4.778,2.313,6.731,3.754c-3.455,3.438-5.367,6.852-5.367,6.852  c-0.748,1.202-0.541,2.706,0,3.865c0.542,1.16,2.242,1.16,2.474,0c1.353-3.456,3.295-6.348,5.344-8.725  c5.934,5.295,8.465,11.086,8.287,9.174c-0.798-4.661-3.432-8.53-6.172-11.427C16.903,2.675,21.333,0.676,19.626,0.835z" />
                        <text x="0" y="35" fill="#000000" font-size="5px" font-weight="bold"
                            font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created
                            by AS Design</text><text x="0" y="40" fill="#000000" font-size="5px" font-weight="bold"
                            font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from
                            the
                            Noun Project</text>
                    </svg>
                </div>
            </div>
            @endforeach
        </div>
        <div></div>
    </div>
</div>
<div class="modal fade" id="modalinsert">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{route('admin.album.add')}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <legend>Thêm Thư mục</legend>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Tên thư mục:</label> <span id="errorname"></span>
                        <input type="text" class="form-control" id="name" name="name" value="" onblur="checkname();"
                            Required />
                    </div>
                    <div class="form-group">
                        <label for="">Chọn danh mục</label> <span id="errortitle"></span><br>
                        <select class="form-select" name="cate_id" aria-label="Default select example">
                            <option selected>Danh mục</option>
                            @foreach($categories as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <?php
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $date = date('Y-m-d H:i:s');
                    ?>
                    <input type="hidden" id="created_at" name="created_at" value="{{$date}}">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" name="insert" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection