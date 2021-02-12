@extends('layouts.admin-home.desain')




@section('content-desain')
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Desain</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" data-toggle="modal" data-target="#tambahDesain"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Desain</a>
    </div>
</div>


<!-- table -->
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Nama Desain</th>
                <th>deskripsi</th>
                <th>Image-bg</th>
                <th>jumlah View</th>
                <th>Image-preview</th>
                <th>Control</th>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $item)
            <tr>
                <td>{{$item->nama}}</td>
                <td><p style="width:150px;">
                {{substr($item->deskripsi,0,150)}} . .

                </p></td>
                <td>
                    <img src="{{Storage::url($item->imgbg)}}" alt="" style="width:150px" class="img-thumbnail"/>
                </td>
                <td>{{$item->views}}</td>
                <td>
                <img src="{{Storage::url($item->imgprev)}}" alt="" class="img-thumbnail" style="max-width:200px;max-height:400px;"/>
                </td>
              
                <td>
                    <div>


                    <a data-target="#editDesain" data-toggle="modal" data-caption ="{{$item->deskripsi}}"data-nama="{{$item->nama}}" data-views ="{{$item->views}}"data-target-id="{{$item->id}}" class="tomboledit btn btn-info">


                    <i class="fa fa-edit"></i>


                    </a>
                    <form class="d-inline" action="{{ route('desain.destroy',$item->id)}}" method="post">
                    
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td>
                    Data kosong
                <td>
            </tr>
            @endforelse

        </tbody>
    </table>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="tambahDesain">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Desain</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <form action="{{route('desain.index')}}" method="post" enctype="multipart/form-data" class="d-flex justify-content-center flex-column">
                    @csrf
                    <label class="mt-4">Nama Desain</label>
                    <input class="form-control " type="text" name="nama" placeholder="nama desain" />
                    <label class="mt-4">Deskripsi</label>
                    <textarea placeholder="deskripsi" name="deskripsi" class="form-control" rows="5"></textarea>                
                        <div class="form-group d-flex flex-column mt-4"><label class="mr-3">Image - bg</label>
                        <input type="file" class="mt-4" name="imgbg"/></div>
                        <div class="form-group d-flex flex-column mt-4"><label class="mr-3">Image - preview</label><input name="imgprev" type="file" class="mt-4" /></div>
                        <div class="d-flex justify-content-center mt-4"><button class="btn btn-primary" type="submit" style="width: 150px;">Save</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" role="dialog" tabindex="-1" id="editDesain">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Desain</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                
                    <form action="{{route('desain.update','id_desain ')}}" method="post" enctype="multipart/form-data" class="d-flex justify-content-center flex-column">
                    @method('PUT')
                    @csrf
                    <input class="form-control mt-2" type="text" id="id_desain" name="id" placeholder="nama desain"
                    value="" readonly />

                    <label class="mr-3">Nama Tema</label>
                    <input class="form-control mt-2" type="text" id="namadesain" name="nama" placeholder="nama desain"
                    value="" />
                    <label class="mr-3">deskripsi</label>
                    <textarea  id="deskripsi" name="deskripsi" class="form-control" rows="5"></textarea>      
                    <input class="form-control mt-4" type="text"id="jml_views" name="views" placeholder="nama desain"
                    value="" readonly />
                    
                 
                        <div class="form-group d-flex flex-column mt-4"><label class="mr-3">Image - bg</label>
                        <input type="file" class="mt-4" name="imgbg"/></div>
                        <div class="form-group d-flex flex-column mt-4"><label class="mr-3">Image - preview</label><input name="imgprev" type="file" class="mt-4" /></div>
                        <div class="d-flex justify-content-center mt-4"><button class="btn btn-primary" type="submit" style="width: 150px;">Update</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
