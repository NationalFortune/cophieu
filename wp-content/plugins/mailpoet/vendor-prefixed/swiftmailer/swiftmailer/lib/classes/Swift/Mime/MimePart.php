<?php
 namespace MailPoetVendor; if (!defined('ABSPATH')) exit; class Swift_Mime_MimePart extends Swift_Mime_SimpleMimeEntity { protected $userFormat; protected $userCharset; protected $userDelSp; private $nestingLevel = self::LEVEL_ALTERNATIVE; public function __construct(Swift_Mime_SimpleHeaderSet $headers, Swift_Mime_ContentEncoder $encoder, Swift_KeyCache $cache, Swift_IdGenerator $idGenerator, $charset = null) { parent::__construct($headers, $encoder, $cache, $idGenerator); $this->setContentType('text/plain'); if (null !== $charset) { $this->setCharset($charset); } } public function setBody($body, $contentType = null, $charset = null) { if (isset($charset)) { $this->setCharset($charset); } $body = $this->convertString($body); parent::setBody($body, $contentType); return $this; } public function getCharset() { return $this->getHeaderParameter('Content-Type', 'charset'); } public function setCharset($charset) { $this->setHeaderParameter('Content-Type', 'charset', $charset); if ($charset !== $this->userCharset) { $this->clearCache(); } $this->userCharset = $charset; parent::charsetChanged($charset); return $this; } public function getFormat() { return $this->getHeaderParameter('Content-Type', 'format'); } public function setFormat($format) { $this->setHeaderParameter('Content-Type', 'format', $format); $this->userFormat = $format; return $this; } public function getDelSp() { return 'yes' === $this->getHeaderParameter('Content-Type', 'delsp'); } public function setDelSp($delsp = \true) { $this->setHeaderParameter('Content-Type', 'delsp', $delsp ? 'yes' : null); $this->userDelSp = $delsp; return $this; } public function getNestingLevel() { return $this->nestingLevel; } public function charsetChanged($charset) { $this->setCharset($charset); } protected function fixHeaders() { parent::fixHeaders(); if (\count($this->getChildren())) { $this->setHeaderParameter('Content-Type', 'charset', null); $this->setHeaderParameter('Content-Type', 'format', null); $this->setHeaderParameter('Content-Type', 'delsp', null); } else { $this->setCharset($this->userCharset); $this->setFormat($this->userFormat); $this->setDelSp($this->userDelSp); } } protected function setNestingLevel($level) { $this->nestingLevel = $level; } protected function convertString($string) { $charset = \strtolower($this->getCharset() ?? ''); if (!\in_array($charset, ['utf-8', 'iso-8859-1', 'iso-8859-15', ''])) { return \mb_convert_encoding($string, $charset, 'utf-8'); } return $string; } } 