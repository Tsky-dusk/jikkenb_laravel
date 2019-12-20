# 作業計画

## front

### 作成するページ


- Top
    - ログイン時はワークスペース、非ログイン時はサイト説明ページを表示
- Register
    - 登録画面とメール認証画面
- Signin
    - ログイン画面
- Settings
    - 設定画面 (TopにComponentとして表示してもいいかも)

## api

### 作成するAPI

#### /api/v1/auth

- 認証に使用
- method
    - get

#### /api/v1/register

- 新規ユーザ登録に使用
- method
    - post

#### /api/v1/register/confim

- 新規ユーザ登録メール認証に使用
- method
    - get

#### /api/v1/users

- ユーザ一覧
- method
    - get

#### /api/v1/users/:id

- ユーザ情報
- method
    - get
    - post
    - delete

#### /api/v1/hook

- google OAuthのコールバックに使用
- method
    - get
