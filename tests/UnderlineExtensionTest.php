<?php
  
  use BenFiratKaya\CommonMarkExtension\UnderlineExtension;
  use League\CommonMark\Environment\Environment;
  use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
  use League\CommonMark\MarkdownConverter;
  use PHPUnit\Framework\TestCase;
  
  class UnderlineExtensionTest extends TestCase {
    protected function getConverter(): MarkdownConverter {
      $environment = new Environment();
      $environment->addExtension(new CommonMarkCoreExtension())->addExtension(new UnderlineExtension());
      
      return new MarkdownConverter($environment);
    }
    
    public function testApplyForAllLinks(): void {
      $converter = $this->getConverter();
      
      $markdown = '!!test!!';
      $html = $converter->convertToHtml($markdown);
      
      $this->assertStringContainsString(
        '<u>test</u>',
        $html
      );
    }
  }
