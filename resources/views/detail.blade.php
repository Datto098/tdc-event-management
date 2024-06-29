@extends('layouts.app')

@section('title', 'Chi tiết')

@section('content')
<link rel="stylesheet" href="{{ asset('css/ckeditor.css') }}">
<div class="w-[92%] container mx-auto detail">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
        <div class="col-span-8 p-4">
            <h2 class="md:text-3xl text-base font-bold md:pb-6 pb-4">{{$event->name}}</h2>
            <p class="md:text-base text-xs italic text-gray-500 md:pb-6 pb-3">
            </p>
            <div class="banner">
                <img src="{{ $event->event_photo }}" alt="" srcset="">
            </div>
            <div class="mt-11">
                <p>
                    <span class="font-bold">Ngày bắt đầu đăng ký:</span>
                    <span>{{ \Carbon\Carbon::parse($event->registration_start)->format('H:i d/m/Y') }}</span>
                </p>
                <p>
                    <span class="font-bold">Ngày kết thúc đăng ký:</span>
                    <span>{{ \Carbon\Carbon::parse($event->registration_end)->format('H:i d/m/Y') }}</span>
                </p>
                <p>
                    <span class="font-bold">Ngày diễn ra:</span>
                    <span>{{ \Carbon\Carbon::parse($event->event_start)->format('H:i d/m/Y') }}</span>
                </p>
                <p>Quét mã dưới đây để đăng ký</p>
            </div>
            <div class="mt-11 ck-content">
                {!! $event->content !!}
            </div>
        </div>
        <div class="col-span-4  p-4">
            <!-- Nội dung của cột 20% -->
            <h1 class="title font-bold capitalize">Sự kiện <span>Sắp diễn ra</span></h1>
            <div class="owl-carousel owl-theme">
                @foreach ($upcomingEvents as $event)
                <div class="p-4 m-2 event-card">
                    <div class="background">
                        <img src="{{$event->event_photo}}" alt="">
                    </div>
                    <div class="content">
                        <div class="event-title">
                            <a>
                                {{$event->name}}
                            </a>
                        </div>
                        <div class="event-desc">
                            <div class="event-time"><span> {{$event->event_start}}</span></div>
                            <div class="event-location"><span>{{$event->location}}</span></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>

<script>

</script>
@endsection
