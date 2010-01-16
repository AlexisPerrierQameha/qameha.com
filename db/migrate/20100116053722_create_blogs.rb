class CreateBlogs < ActiveRecord::Migration
  def self.up
    create_table :blogs do |t|
      t.column :title, :string
      t.column :text, :text
      t.column :user_id, :integer
      t.datetime :published_at
      t.timestamps
    end
  end

  def self.down
    drop_table :blogs
  end
end
