@extends('layouts.app')
@section('content')
    @php
        /** @var \App\Models\BlogCategory $item */
        /** @var \Illuminate\Support\ViewErrorBag $errors */
    @endphp
    @if ($item->exists)
        <form method="POST" action="{{route('blog.admin.categories.update',$item->id)}}">
            @method('PATCH')
            @else
                <form method="POST" action="{{route('blog.admin.categories.store')}}">
                    @endif
                    @csrf
                    <div class="container">
                        @if ($errors->any())
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <div class="alert-danger alert" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                            <span aria-hidden="true">x</span>
                                            {{$errors->first()}}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="alert-success alert" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                            {{session()->get('success')}}
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                @include('blog.admin.categories.includes.item_edit_main_col')
                            </div>
                            <div class="col-md-3">
                                @include('blog.admin.categories.includes.item_edit_add_col')
                            </div>
                        </div>
                    </div>
                </form>
@endsection

