-- ユーザテーブルにカラムを追加
alter table jikkenb.users add (registration_token varchar(1023), registration_limit integer);
