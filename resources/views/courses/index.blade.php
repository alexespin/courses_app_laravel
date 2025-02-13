@extends('layouts.app')

@section('title', 'Courses')

@section('content')

    <h1 class="text-xl font-bold text-center">your Courses</h1>

    @foreach($courses as $course)
        <table class="mt-6 table-auto border-collapse border border-gray-300 w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">Course Title</th>
                    <th class="border border-gray-300 px-4 py-2">Teacher</th>
                    <th class="border border-gray-300 px-4 py-2">Start Time</th>
                    <th class="border border-gray-300 px-4 py-2">End Time</th>
                    <th class="border border-gray-300 px-4 py-2">Classroom</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{$course->class_name}}</td>
                    <td class="border border-gray-300 px-4 py-2">{{$course->teacher}}</td>
                    <td class="border border-gray-300 px-4 py-2">{{$course->start_time}}</td>
                    <td class="border border-gray-300 px-4 py-2">{{$course->end_time}}</td>
                    <td class="border border-gray-300 px-4 py-2">{{$course->classroom}}</td>
                </tr>
            </tbody>
        </table>
    @endforeach
@endsection
