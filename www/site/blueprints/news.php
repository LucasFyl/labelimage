<?php if(!defined('KIRBY')) exit ?>

title: News
pages:
  template: single-news
  num: 
    mode: date
    field: added
files: false
fields:
  title:
    label: Title
    type:  text