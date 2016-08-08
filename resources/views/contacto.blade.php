@extends('layouts.master')

@section('title', 'Contactanos')

@section('content')
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">{{ trans('messages.title_panel') }}</div>
            <div class="panel-body">
                <form action="sendMail" method="post" role="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">{{ trans('messages.name') }}</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>

                    <div class="form-group">
                        <label for="mail">{{ trans('messages.mail') }}</label>
                        <input type="email" class="form-control" name="mail" id="mail" required>
                    </div>

                    <div class="form-group">
                        <label for="body">{{ trans('messages.message') }}</label>
                        <textarea class="form-control" rows="1" name="body" id="body"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">{{ trans('messages.btn_contact_us') }}</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15585.884755864723!2d-86.87688622724608!3d12.418294516548364!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1465810316033"
            width="100%"
            height="400"
            frameborder="0"
            style="border: 0;"
            allowfullscreen>
        </iframe>
    </div>
@endsection

@section('footer')
    @include('shared.footer')
@endsection
