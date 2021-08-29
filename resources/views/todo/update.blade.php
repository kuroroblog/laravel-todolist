<!DOCTYPE html>
<html lang="ja">
    {{-- 参考 : https://readouble.com/laravel/8.x/ja/blade.html --}}
    @include('component.head')
    <body>
        <div class="container">
            <div class="card">
                <h2>Todo List</h2>
                <div class="todo">
                    <ul class="error">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <table>
                        <tr>
                            <th>作成日</th>
                            <th>タスク名</th>
                            <th>更新</th>
                        </tr>
                        <tr>
                            <td>
                                {{ $item->getCreatedAt() }}
                            </td>
                            <form action="{{ route('todo.update', ['id' => $item->getId() ]) }}" method="POST">
                                @csrf
                                <td>
                                    <input type="text" name="content" class="text-update" value="{{ $item->getContent() }}" maxlength="20" required>
                                </td>
                                <td>
                                    <button class="submit-update">更新</button>
                                </td>
                            </form>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
