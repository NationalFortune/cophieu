<?php
 namespace MailPoetVendor\Egulias\EmailValidator\Exception; if (!defined('ABSPATH')) exit; class UnopenedComment extends InvalidEmail { const CODE = 152; const REASON = "No opening comment token found"; } 