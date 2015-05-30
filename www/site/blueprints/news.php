<?php if(!defined('KIRBY')) exit ?>

title: News
pages:
  template: single-news
  limit: 10
  num: 
    mode: date
    field: added
files: false
fields:
  title:
    label: Title
    type:  text