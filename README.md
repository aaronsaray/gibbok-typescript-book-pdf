# The Concise TypeScript Book - PDF

This project demonstrates using [Typesetter](https://typesetter.io) to create an ebook of [The Concise Typescript Book](https://github.com/gibbok/typescript-book).

## Development Steps

These are the steps that were used to create this project.

* initialize config: `docker run --rm -v ./runtime:/runtime ghcr.io/typesetterio/typesetter-cli:latest init`
* remove content folder as we're going to use the submodule `rm -rf runtime/content`
* modify config.php - you can see it has been updated
* run the generation: `docker run --rm -v ./runtime:/runtime -v ./typescript-book:/typescript-book-content ghcr.io/typesetterio/typesetter-cli:latest generate`

Now you can access it at [runtime/the-concise-typescript-book,pdf](runtime/the-concise-typescript-book.pdf).
