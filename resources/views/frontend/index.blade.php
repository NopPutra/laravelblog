@extends('layouts.app')

@section('title', "Welcome to laravel 8")

@section('meta_description', "Welcome to laravel 8")

@section('meta_keyword', "Welcome to laravel 8")

@section('content')

    <div class="bg-danger py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel category-carousel owl-theme">
                        @foreach($all_categories as $all_cate_item)
                        <div class="item">
                            <a href="{{ ('tutorial/'.$all_cate_item->slug) }}" class="text-decoration-none">
                                <div class="card">
                                    <img src="{{ asset('uploads/category/'.$all_cate_item->image) }}" alt="Image">
                                    <div class="card-body text-center">
                                        <h5>{{ $all_cate_item->name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-1 bg-gray">
        <div class="container">
            <div class="border text-center p-3">
                <h3>Advertise Here</h3>
            </div>
        </div>
    </div>
    <div class="py-5 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Funda of Web IT</h4>
                    <div class="underline"></div>
                    <p>
                        English texts for beginners to practice reading and comprehension online and for free. Practicing your comprehension of written English will both improve your vocabulary and understanding of grammar and word order. 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>All Category</h4>
                    <div class="underline"></div>
                </div>
                @foreach($all_categories as $item)
                <div class="col-md-3">
                    <div class="card card-body mb-3">
                        <a href="{{ ('tutorial/'.$item->slug) }}" class="text-decoration-none">
                            <h4 class="text-dark mb-0 text-center">{{ $item->name }}</h4>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Latest Posts</h4>
                    <div class="underline"></div>
                </div>
                <div class="col-md-8">
                    @foreach($latest_posts as $latest_post_item)
                    <div class="card card-body mb-3 bg-gray shadow">
                        <a href="{{ ('tutorial/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug) }}" class="text-decoration-none">
                            <h4 class="text-dark mb-0">{{ $latest_post_item->name }}</h4>
                        </a>
                        <h6>Posted On: {{ $latest_post_item->created_at->format('d-m-Y') }}</h6>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <div class="border text-center p-3">
                        <h3>Advertise Here</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection