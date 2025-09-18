# Overview

This simple repository creates a Laravel app with Filament v4. It is used to demonstrate a keyboard trap with the adjacent Markdown Editors.

## Running

### Setup

Uses a Laravel 12 and Filament 4 environment.

- Setup the `.env` file with necessary values for things such as `APP_KEY` and `APP_URL`
- Run `php artisan migrate:fresh --seed` to add a test model instance.
- Run `php artisan make:filament-user ` to create a filament user to log in with.

### Steps to test

1. Launch the application (I used Herd), and go to the `\admin` path
2. Log in with the filament user created during setup
3. Click on the "Course" in the left navigation.
4. Edit the existing course or create a new one.
    - _**Note:** the model is an example only and not intended for real use._
5. Using the keyboard press the `tab` key to navigate between the form inputs
    - Notice that when there are adjacent Markdown Editors that you aren't able to use the `tab` key to navigate from the first one to the second.
6. Using the keyboard press the `shift-tab` key combination from any Markdown Editor.
   - Notice that focus is always moved back to the first form input.
