<?php

abstract class Group {

  const Faculty = 1;
  const Graduate_Committee = 2;
  const Graduate_Committee_Chair = 3;

}

abstract class Nomination_State {

  const Submitted = 1;
  const Responded = 2;
  const Verified = 3;

}

abstract class Season {

  const Spring = 1;
  const Summer = 2;
  const Fall = 3;

}
