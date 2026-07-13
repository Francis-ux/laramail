@extends('layouts.main')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                @if (session()->has('error'))
                    <div class="alert alert-danger text-center">
                        <b>{{ session()->get('error') }}</b>
                    </div>
                @elseif(session()->has('success'))
                    <div class="alert alert-success text-center">
                        <b>{{ session()->get('success') }}</b>
                    </div>
                @endif
                <form action="{{ route('send-plain-email') }}" method="post">
                    @csrf
                    <div class="card rounded shadow border-0">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="receiver_email">Receiver Email:</label>
                                <input type="email" name="receiver_email" id="receiver_email" class="form-control"
                                    autocomplete="receiver_email">
                                @error('receiver_email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="subject">Subject:</label>
                                <input type="text" name="subject" id="subject" class="form-control"
                                    autocomplete="subject">
                                @error('subject')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="message">Message:</label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control tinymce_editor"
                                    autocomplete="message"></textarea>
                                @error('message')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">
                                    Send Mail
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
