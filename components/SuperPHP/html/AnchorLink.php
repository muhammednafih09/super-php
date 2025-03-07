<?php

namespace SuperPHP;

use DOMNode;
use SuperPHP\SuperPHPElement;

class AnchorLink extends SuperPHPElement {
    public DOMNode $node;

    /**
     * AnchorLink
     * 
     * The <a> tag defines a hyperlink, which is used to link from one page to another.
     * 
     * The most important attribute of the <a> element is the href attribute, which indicates the link's destination.
     * 
     * By default, links will appear as follows in all browsers:
     * 
     *  * An unvisited link is underlined and blue
     *  * A visited link is underlined and purple
     *  * An active link is underlined and red
     * 
     *   Attributes:
     * 
     * @param SuperPHPElement[] $children
     * @param String|null $download - filename
     * * Specifies that the target will be downloaded when a user clicks on the hyperlink
     * @param String|null $href - URL
     * * Specifies the URL of the page the link goes to
     * @param String|null $hreflang - language_code
     * * Specifies the language of the linked document
     * @param String|null $media - media_query
     * * Specifies what media/device the linked document is optimized for
     * @param String|null $ping - list_of_URLs
     * * Specifies a space-separated list of URLs to which, when the link is followed, post requests with the body ping will be sent by the browser (in the background). Typically used for tracking.
     * @param String|null $referrerpolicy
     *  - no-referrer
     *  - no-referrer-when-downgrade
     *  - origin
     *  - origin-when-cross-origin
     *  - same-origin
     *  - strict-origin-when-cross-origin
     *  - unsafe-url
     * * Specifies which referrer information to send with the link
     * @param String|null $rel
     *  - alternate
     *  - author
     *  - bookmark
     *  - external
     *  - help
     *  - license
     *  - next
     *  - nofollow
     *  - noreferrer
     *  - noopener
     *  - prev
     *  - search
     *  - tag
     * * Specifies the relationship between the current document and the linked document
     * @param String|null $target
     *  - _blank
     *  - _parent
     *  - _self
     *  - _top
     * * Specifies where to open the linked document
     * @param String|null $type
     * - media_type
     * * Specifies the media type of the linked document
     * 
     * * Global attributes:
     * accesskey	Specifies a shortcut key to activate/focus an element
     * @param array|null $classes	Specifies one or more classnames for an element (refers to a class in a style sheet)
     * @param String|null $contenteditable	Specifies whether the content of an element is editable or not
     * @param String|null $dir	Specifies the text direction for the content in an element
     * @param String|null $draggable	Specifies whether an element is draggable or not
     * @param String|null $hidden	Specifies that an element is not yet, or is no longer, relevant
     * @param String|null $id	Specifies a unique id for an element
     * @param String|null $lang	Specifies the language of the element's content
     * @param String|null $spellcheck	Specifies whether the element is to have its spelling and grammar checked or not
     * @param String|null $style	Specifies an inline CSS style for an element
     * @param String|null $tabindex	Specifies the tabbing order of an element
     * @param String|null $title	Specifies extra information about an element
     * @param String|null $translate	Specifies whether the content of an element should be translated or not
     * 
     * @author Jishnu Raj <jishnurajpp2@gmail.com>
     */
    function __construct(
        SuperPHPElement $child = null,
        String $download = null,
        String $href = null,
        String $hreflang = null,
        String $media = null,
        String $ping = null,
        String $referrerpolicy = null,
        String $rel = null,
        String $target = null,
        String $type = null,

        // Global attributes
        String $accesskey = null,
        array $classes = null,
        String $contenteditable = null,
        String $dir = null,
        String $draggable = null,
        String $hidden = null,
        String $id = null,
        String $lang = null,
        String $spellcheck = null,
        String $style = null,
        String $tabindex = null,
        String $title = null,
        String $translate = null,
    ) {
        $this->node = self::$dom->createElement("a");
        if ($download) $this->node->setAttribute("download", $download);
        if ($href) $this->node->setAttribute("href", $href);
        if ($hreflang) $this->node->setAttribute("hreflang", $hreflang);
        if ($media) $this->node->setAttribute("media", $media);
        if ($ping) $this->node->setAttribute("ping", $ping);
        if ($referrerpolicy) $this->node->setAttribute("referrerpolicy", $referrerpolicy);
        if ($rel) $this->node->setAttribute("rel", $rel);
        if ($target) $this->node->setAttribute("target", $target);
        if ($type) $this->node->setAttribute("type", $type);

        // Global attributes
        if ($accesskey) $this->node->setAttribute("accesskey", $accesskey);
        if ($classes) $this->node->setAttribute("class", implode(" ", $classes));
        if ($contenteditable) $this->node->setAttribute("contenteditable", $contenteditable);
        if ($dir) $this->node->setAttribute("dir", $dir);
        if ($draggable) $this->node->setAttribute("draggable", $draggable);
        if ($hidden) $this->node->setAttribute("hidden", $hidden);
        if ($id) $this->node->setAttribute("id", $id);
        if ($lang) $this->node->setAttribute("lang", $lang);
        if ($spellcheck) $this->node->setAttribute("spellcheck", $spellcheck);
        if ($style) $this->node->setAttribute("style", $style);
        if ($tabindex) $this->node->setAttribute("tabindex", $tabindex);
        if ($title) $this->node->setAttribute("title", $title);
        if ($translate) $this->node->setAttribute("translate", $translate);

        if ($child)
            $this->node->appendChild($child->node);
    }
}
