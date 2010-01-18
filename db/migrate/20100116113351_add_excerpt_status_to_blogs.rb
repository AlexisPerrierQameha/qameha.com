class AddExcerptStatusToBlogs < ActiveRecord::Migration
  def self.up
    add_column :blogs, :status, :string, :default => 'draft'
    add_column :blogs, :excerpt, :text

  end

  def self.down
    remove_column :blogs, :status
    remove_column :blogs, :excerpt
  end
end
