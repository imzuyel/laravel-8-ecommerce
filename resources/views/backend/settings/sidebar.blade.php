<div class="list-group">
  @if (Auth::user()->hasPermission('app.settings.general'))
  <a href="{{ route('app.settings.index') }}" class="list-group-item list-group-item-action {{ Route::is('app.settings.index') ? 'active' : ''  }}">
    General
  </a>
  @endif
  @if (Auth::user()->hasPermission('app.settings.appearance'))
  <a href="{{ route('app.settings.appearance.index') }}" class="list-group-item list-group-item-action {{ Route::is('app.settings.appearance.index') ? 'active' : ''  }}">
    Appearance
  </a>
  @endif
  @if (Auth::user()->hasPermission('app.settings.mail'))
  <a href="{{ route('app.settings.mail.index') }}" class="list-group-item list-group-item-action {{ Route::is('app.settings.mail.index') ? 'active' : ''  }}">
    Mail
  </a>
  @endif
  @if (Auth::user()->hasPermission('app.settings.socialite'))
  <a href="{{ route('app.settings.socialite.index') }}" class="list-group-item list-group-item-action {{ Route::is('app.settings.socialite.index') ? 'active' : ''  }}">
    Socialite
  </a>
  @endif
  @if (Auth::user()->hasPermission('app.settings.database'))
  <a href="{{ route('app.settings.database.index') }}" class="list-group-item list-group-item-action {{ Route::is('app.settings.database.index') ? 'active' : ''  }}">
    Database
  </a>
  @endif
</div>
