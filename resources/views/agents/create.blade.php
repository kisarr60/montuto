@extends('layouts.app')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Ajouter un prof</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('agents.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">Prénoms</label>
                        <div class="control">
                          <input class="input @error('title') is-danger @enderror" type="text" name="title" value="{{ old('prenoms') }}" placeholder="Prénoms">
                        </div>
                        @error('prenoms')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    
                    <div class="field">
                        <div class="control">
                          <button class="button is-link">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection