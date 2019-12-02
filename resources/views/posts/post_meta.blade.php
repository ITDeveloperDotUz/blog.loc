

<meta content="{{ $post->created_at->format('Y-m-d') }}" property="article:modified_time">

<meta content="article" property="og:type">
<meta content="{{ $post->title }}" property="og:title">
<meta content="{{ $link }}" property="og:url">

<meta name="DC.Title" content="{{ $post->title }}">
<meta name="DC.Description" content="{{ $post->meta_description }}">

<meta name="DC.Source" content="{{ $post->category->name }}">
<meta name="DC.Source.ISSN" content="1300-7874">
<meta name="DC.Source.Issue" content="29">
<meta name="DC.Source.URI" content="{{ $link }}">

<meta name="DC.Type" content="Text.Serial.Journal">
<meta name="DC.Type.articleType" content="Maqolalar">

<meta name="DC.Creator.PersonalName" content="{{ $post->authorId->name }}">
<meta name="DC.Identifier" content="{{ $post->category->id.'000'.$post->id }}">
<meta name="DC.Identifier.pageNumber" content="{{ $post->category->id.'-'.$post->id }}">

<meta name="DC.Identifier.URI" content="{{ $link }}">
<meta name="DC.Language" content="uz scheme=&quot;ISO639-1&quot;">

<meta name="citation_journal_title" content="Betbe4">
<meta name="citation_author" content="{{ $post->authorId->name }}">

<meta name="citation_title" content="{{ $post->title }}">
<meta name="citation_publication_date" content="{{ $post->created_at->format('Y-m-d') }}">

<meta name="citation_issue" content="29">
<meta name="citation_firstpage" content="493">
<meta name="citation_lastpage" content="518">

<meta name="citation_abstract_html_url" content="{{ route('posts.show', $post->slug) }}">
<meta name="citation_language" content="uz">
<meta name="citation_keywords" content="{{ $post->meta_keywords }}">
<meta name="citation_pdf_url" content="{{ $link }}">
