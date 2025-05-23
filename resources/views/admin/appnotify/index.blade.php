@extends('admin.layouts.master')


@section('content')


    @include('admin.common.message')

    <h2 class="pb-3 border-bottom">
        App Notification <a href="{{ route('admin.appnotify.create') }}" class="btn btn-secondary float-right addnewbtn">+ Add New</a>
    </h2>
    
    @if(!empty($model->total()))
    <div class="txtcard image txt-right">
        <div class="row">
        @foreach($model->items() as $item)
        <div class="col-4 col-xxl-3 ">
            @php($imgurl=!empty($item->thumbnail)?Lib::publicImgSrc($item->thumbnail->urlkey):Lib::placeholder('movie'))
            <div class="card">
              <div class="card-body">
                <div class="card-title card-image" style="background-image:url({{ $imgurl  }})"><div class="d-flex overlay justify-content-center "><div class="d-flex align-self-center">                    
                    {{ $item->title }}
                </div></div></div>
                <div class="card-act">
                    <a href="{{ route('admin.appnotify.edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ route('admin.appnotify.delete',$item->id) }}" class="btn btn-outline-danger btn-sm btn-delete-copy-{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#delete{{ $item->id }}">Delete</a>   
                </div>
                  @php ($delid=$item->id)
                  @php ($delurl=route('admin.appnotify.delete',$item->id))
                  @include('admin.common.modaldelete')
              </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5 paginationCt">
        <div class="d-flex">
            {{ $model->onEachSide(1)->links() }}
        </div>
    </div>
    @else
        @include('admin.common.noresult')
    @endif


@endsection



