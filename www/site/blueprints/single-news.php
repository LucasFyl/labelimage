<?php if(!defined('KIRBY')) exit ?>

title: Article
pages: 
  template: single-news
  limit: 10
  num: 
    mode: date
    field: added
  hide: true
files:
  sortable: true
  fields:
    caption:
      label: Caption
      type: text
  type: image
fields:
  pageSettings: 
    label: Page Settings
    type: Headline
  title:
    label: Titre
    type:  text
    required: true
  title2:
    label: Titre 2
    type:  text
  title3: 
    label: Titre 3
    type:  text
  date:
    label: Date
    type:  date
    default: today
    required: true
  pageContent: 
    label: Page Content
    type: Headline
  text:
    label: Article
    type:  textarea
    required: true
    placeholder: Écrire ici l'article...
  tags:
    label: Tags
    type:  tags
  blocAdress: 
    label: Adresse bloc
    type: Headline
  adressBloc: 
    label: Adresse
    type: textarea
  adressUrl:
    label: url pour l'adresse
    type: url