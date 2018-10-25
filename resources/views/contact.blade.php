@extends('layouts.app')

@section('content')
<div class="contact">

    <div class="wrapper">
        <div class="row">
            <div class="md-col-8 md-offset-2">
                <form action="{{ route('send') }}" method="post">
                    @csrf

                    <div class="form__group {{ $errors->has('subject') ? ' has__danger' : '' }} ">
                        <label for="subject" class="form__label"><strong>SUBJECT</strong><span class="text--danger">*</span></label>
                        <input type="text" name="subject" id="subject" class="form__item">
                    </div>

                    <div class="form__group {{ $errors->has('subject') ? ' has__danger' : '' }} ">
                        <label for="name" class="form__label"><strong>NAME</strong><span class="text--danger">*</span></label>
                        <input type="text" name="name" id="name" class="form__item">
                    </div>

                    <div class="form__group {{ $errors->has('subject') ? ' has__danger' : '' }} ">
                        <label for="email" class="form__label"><strong>EMAIL</strong><span class="text--danger">*</span></label>
                        <input type="email" name="email" id="email" class="form__item">
                    </div>

                    <div class="form__group {{ $errors->has('subject') ? ' has__danger' : '' }} ">
                        <label for="message" class="form__label"><strong>MESSAGES</strong><span class="text--danger">*</span></label>
                        <textarea class="form__item" name="message" id="message" cols="30" rows="8"></textarea>
                    </div>

                    <div class="form__group">
                        <button type="submit" class="btn btn--round btn--lg btn--primary">SEND MAIL <i class="lunacon lunacon-sent-mail"></i></button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
