#!/bin/bash
####################################
#
# Backup documents files.
#
####################################
backup_files="/home/denys/Downloads/*.xlsx"

dest_path="/home/denys/studies/backup"

# Create archive
day=$(date +%a_%b_%y_%H_%M)
hostname=$(hostname -s)
archive_file_name="$hostname-$day.tgz"

# Print start status message.
echo "Backing up $backup_files to $dest_path/$archive_file_name"

# Backup the files using tar.

tar czf $dest_path/"$archive_file_name" $backup_files

# Print end status message.
echo "Backup finished"

# show backup result
ls -lh $dest_path
