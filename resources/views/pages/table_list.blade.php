@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Authorize App')])

@section('content')

               @section('vue-section')
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <passport-clients></passport-clients>
                             <passport-authorized-clients></passport-authorized-clients>
                            {{-- <show-all-users></show-all-users>
                            <passport-personal-access-tokens></passport-personal-access-tokens> --}}
                        </div>
                    </div>
                </div>
                @endsection


@endsection
