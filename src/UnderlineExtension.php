<?php
  
  declare(strict_types=1);
  
  /*
   * This file is part of the league/commonmark package.
   *
   * (c) Colin O'Dell <colinodell@gmail.com> and uAfrica.com (http://uafrica.com)
   *
   * For the full copyright and license information, please view the LICENSE
   * file that was distributed with this source code.
   */
  
  namespace BenFiratKaya\CommonMarkExtension;
  
  use League\CommonMark\Environment\EnvironmentBuilderInterface;
  use League\CommonMark\Extension\ExtensionInterface;
  
  final class UnderlineExtension implements ExtensionInterface {
    public function register(EnvironmentBuilderInterface $environment): void {
      $environment->addDelimiterProcessor(new UnderlineDelimiterProcessor());
      $environment->addRenderer(Underline::class, new UnderlineRenderer());
    }
  }
