@if (Route::is('admin.page-management.home.index'))
Home Page Management | Admin Panel - {{ config('app.name') }}
@elseif(Route::is('admin.page-management.create'))
Create New Blog | Admin Panel - {{ config('app.name') }}
@elseif(Route::is('admin.page-management.edit'))
Edit Blog {{ $blog->title }} | Admin Panel - {{ config('app.name') }}
@elseif(Route::is('admin.page-management.show'))
View Blog {{ $blog->title }} | Admin Panel - {{ config('app.name') }}
@endif
