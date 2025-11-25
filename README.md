# COACHTECH 基礎学習ターム  
## 確認テスト：お問い合わせフォーム

本リポジトリは、COACHTECH 基礎学習タームの確認テストとして作成した  
**「お問い合わせフォーム」アプリケーション**です。  
ユーザーからのお問い合わせを受け取り、管理画面で検索・確認・削除ができる Web アプリです。

---

## 📌 1. 機能一覧

### ▼ フロント側（ユーザー）

1. **入力画面（/**）  
   - 姓  
   - 名  
   - 性別（男性 / 女性 / その他）  
   - メールアドレス  
   - 電話番号  
   - 住所  
   - 建物名（任意）  
   - お問い合わせ種類（カテゴリー）  
   - お問い合わせ内容  

2. **確認画面（/contact/confirm）**  
   - 入力内容を一覧表示  
   - 「修正」「送信」ボタンあり

3. **完了画面（/contact/thanks）**  
   - 「Thank you」表示  
   - HOME へ戻るボタン

---

### ▼ 管理側（/admin）

- 氏名検索（姓・名・フルネーム部分一致）  
- 性別検索  
- お問い合わせ種類検索  
- 登録日検索  
- メール送信可否（可 / 不可）  
- 一覧表示（ページネーション対応）  
- 詳細表示  
- 削除機能（単体 / 一括）

---

## 🗂 2. 使用技術

| 種類 | 内容 |
|------|------|
| フレームワーク | Laravel 10.x |
| 言語 | PHP 8.2 |
| DB | SQLite |
| CSS | TailwindCSS |
| 認証 | Breeze（ログイン機能） |

---

## 🧱 3. ER 図

### **contacts テーブル**
| column | type |
|--------|------|
| id | bigint |
| last_name | varchar(255) |
| first_name | varchar(255) |
| gender | tinyint |
| email | varchar(255) |
| tel | varchar(255) |
| address | varchar(255) |
| building | varchar(255) |
| category_id | bigint |
| detail | text |
| created_at | timestamp |
| updated_at | timestamp |

### **categories テーブル**
| column | type |
|--------|------|
| id | bigint |
| content | varchar(255) |
| created_at | timestamp |
| updated_at | timestamp |

> ※ contacts.category_id → categories.id に外部キーで紐づきます。

---


## 📝 4. セットアップ手順

```bash
git clone https://github.com/sayakamasaoka1028-bit/contact-test.git
cd contact-test

composer install

cp .env.example .env
php artisan key:generate

touch database/database.sqlite

php artisan migrate --seed

npm install
npm run build

php artisan serve --port=8001
```
👩‍💻 作者

COACHTECH 受講生
脇山 沙弥華
