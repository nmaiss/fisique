@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('add-theme') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" class="form-control" type="text" name="name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label text-md-right">Url</label>

                            <div class="col-md-6">
                                <input id="url" class="form-control" type="text" name="url" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('add-subtheme') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="theme" class="col-md-4 col-form-label text-md-right">Thème</label>

                            <div class="col-md-6">
                                <select id="theme" name="theme" class="form-control">
                                      @foreach($themes as $theme)
                                          <option value="{{ $theme->id }}">{{ $theme->name }}</option>
                                      @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" class="form-control" type="text" name="name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label text-md-right">Url</label>

                            <div class="col-md-6">
                                <input id="url" class="form-control" type="text" name="url" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('add-problem') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="theme" class="col-md-4 col-form-label text-md-right">Thème</label>

                            <div class="col-md-6">
                                <select id="theme" name="theme" class="form-control">
                                      @foreach($themes as $theme)
                                        <optgroup label = "{{ $theme->name }}">
                                        @foreach($theme->subthemes as $subtheme)
                                             <option value="{{ $subtheme->id }}">{{ $subtheme->name }}</option>
                                        @endforeach
                                      @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Énoncé</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" type="text" name="description" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="solution" class="col-md-4 col-form-label text-md-right">Solution</label>

                            <div class="col-md-6">
                                <input id="solution" class="form-control" type="text" name="solution" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
