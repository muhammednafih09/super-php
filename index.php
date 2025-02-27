<?php

use SuperPHP\Abbr;
use SuperPHP\Address;
use SuperPHP\AnchorLink;
use SuperPHP\Article;
use SuperPHP\Audio;
use SuperPHP\Body;
use SuperPHP\Button;
use SuperPHP\Comment;
use SuperPHP\Head;
use SuperPHP\HTML;
use SuperPHP\LineBreak;
use SuperPHP\SuperPHP;
use SuperPHP\PlainText;
use SuperPHP\Title;
use SuperPHP\Typography;

require_once __DIR__ . "/components/SimpleDB.php";
require_once __DIR__ . "/components/SuperPHP/SuperPHP.php";
require_once __DIR__ . "/components/MyCustomWidgetSample.php";


// $db = new SimpleDB(
//     debug: true
// );

new SuperPHP(
    fn () => new HTML(
        children: [
            new Head(
                children: [
                    new Title(
                        title: new PlainText(text: "Sample title",),
                    ),
                ],
            ),
            new MyCustomWidgetSample(),
            new Body(
                children: [
                    new AnchorLink(
                        new PlainText("Go to Google"),
                        href: "https://google.com",
                        download: "Oi.txt",
                        id: "123",
                        classes: ["btn", "btn-primary"]
                    ),
                    new LineBreak(count: 1),
                    new Comment("<h1>Hllo...!</h1>"),
                    new Button(
                        children: array_map(fn ($element) => new PlainText(text: "Click me!",), [1, 2, 3]),
                    ),
                    new LineBreak(count: 10),
                    new Button(
                        children: [
                            new PlainText(text: "Or click here!",)
                        ],
                    ),
                    new LineBreak(),
                    new Address(
                        child: new PlainText("Sample Address")
                    ),
                    new LineBreak(),
                    new Abbr(
                        child: new PlainText("Sample Abbr")
                    ),
                    new LineBreak(),
                    new Article(
                        child: new PlainText("Sample Article")
                    ),
                    new LineBreak(),
                    new Audio(
                        child: new PlainText("Sample Article"),
                        controls: true
                    ),
                    new LineBreak(),
                    new Typography(
                        child: new PlainText("Sample Heading 1"),
                        id: "test",
                        variant: Typography::H1
                    ),
                    new LineBreak(),
                    new Typography(
                        child: new PlainText("Sample Paragrap"),
                        id: "test",
                        variant: Typography::Paragraph
                    ),
                ],
            ),
        ],
    ),
);
