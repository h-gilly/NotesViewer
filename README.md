## Notes Viewer API

A simple REST-style API built in PHP for viewing notes stored in a local JSON file.
This project demonstrates basic backend routing, JSON handling, and clean API responses without using any frameworks.

# Features

•  Returns all notes
•  Returns a single note by ID
•  Clean JSON responses
•  Lightweight and dependency-free
•  Beginner-friendly structure

# Project Structure

,,,
theNotesViewer/
├── index.php — Main API router
└── notes.json — Local notes data
,,,

# Getting Started

1. Clone the repository

,,,
git clone <your-repo-url>
cd theNotesViewer
,,,

1. Start the local server

```
php -S localhost:8001
```

## API Endpoints

# Get all notes

`GET/notes`

# Get a note by ID

`GET/notes/{id}`
Example:
`GET/notes/1`

## Example Response

```
{
  "id": 1,
  "title": "First Note",
  "content": "This is an example note."
}
```

# Purpose of This Project

This project was created to practice:

- PHP backend fundamentals
- Routing and URL pattern matching
- JSON file storage
- Returning structured API responses
It serves as a simple, clean example of how to build a small API without any frameworks.

# Possible Future Improvements

- Add search (`/notes?search=...`)
- Add note creation (POST)
- Add editing and deleting notes
- Add timestamps or categories
- Add a small frontend viewer

# License

MIT License — free to use or modify.
