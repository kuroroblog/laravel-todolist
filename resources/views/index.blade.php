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

                    <form action="/todo/create" method="POST" class="flex">
                        @csrf
                        <input type="hidden">
                        <input type="text" name="content" class="text-add" maxlength="20" required>
                        <input type="submit" value="追加" class="submit-add">
                    </form>

                    <table>
                        <tr>
                            <th>作成日</th>
                            <th>タスク名</th>
                            <th>更新</th>
                            <th>削除</th>
                        </tr>
                        @foreach($items as $item)
                            <tr>
                                <td>
                                    {{ $item->getCreatedAt() }}
                                </td>
                                <form action="{{ '/todo/update?id=' . $item->getId() }}" method="POST">
                                    @csrf
                                    <td>
                                        <input type="text" name="content" class="text-update" value="{{ $item->getContent() }}" maxlength="20" required>
                                    </td>
                                    <td>
                                        <button class="submit-update">更新</button>
                                    </td>
                                </form>
                                <td>
                                    <form action="{{ '/todo/delete?id=' . $item->getId() }}" method="POST">
                                        @csrf
                                        <button class="submit-delete">削除</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
