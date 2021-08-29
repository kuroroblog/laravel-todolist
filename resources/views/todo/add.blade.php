<!DOCTYPE html>
<html lang="ja">
    {{-- 参考 : https://readouble.com/laravel/8.x/ja/blade.html --}}
    @include('component.head')
    <body>
        <div class="container">
            <div class="card">
                <h2>Todo List create-page</h2>
                <div class="todo">
                    <ul class="error">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <form action="/todo/create" method="POST" class="flex">
                        @csrf
                        <input type="hidden">
                        <input type="text" name="content" class="text-add" maxlength="20" required>
                        <input type="submit" value="追加" class="submit-add">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
