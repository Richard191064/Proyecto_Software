<?php

class __Mustache_ca9abb42ca9eebd20d7cafedd23fbccb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('status');
        $buffer .= $this->section84a05f46cfbf0e88da5976e403de3026($context, $indent, $value);

        return $buffer;
    }

    private function section56f0628a53a78b8028d2b0324829f27f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blockemptymessage, theme_academi';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blockemptymessage, theme_academi';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b7e7ef469d5fda15584df7b8e5f4e98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="custom-alert-block alert alert-warning">
            {{#str}}blockemptymessage, theme_academi{{/str}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="custom-alert-block alert alert-warning">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section56f0628a53a78b8028d2b0324829f27f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB40653e9ea30465a0829820da5912400(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="#" class="prevBtn carousel-control left"> <span aria-hidden="true"></span> </a>
                <a href="#" class="nextBtn carousel-control right"> <span aria-hidden="true"></span> </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a href="#" class="prevBtn carousel-control left"> <span aria-hidden="true"></span> </a>
';
                $buffer .= $indent . '                <a href="#" class="nextBtn carousel-control right"> <span aria-hidden="true"></span> </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe6cf9f04d9195ee7ff6b075eb215808(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <img src="{{{slideimg}}}" class="slide-image">
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <img src="';
                $value = $this->resolveValue($context->find('slideimg'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="slide-image">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC16f5a01ab0de7a8e123fb043bcf5478(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <h1 data-animation=\'animated ';
                $value = $this->resolveValue($context->find('contentAnimation'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\' class="';
                $value = $this->resolveValue($context->find('contentAclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfcc64aa415bad69687fd06c1c63c605(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <p data-animation=\'animated ';
                $value = $this->resolveValue($context->find('contentAnimation'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\' class="';
                $value = $this->resolveValue($context->find('contentAclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('desc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c0ec8c0ed7882b04f72a2593caa6c53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                        <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                            {{btntxt}}
                                                        </a>
                                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                        <a href="';
                $value = $this->resolveValue($context->find('btnlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="';
                $value = $this->resolveValue($context->find('btntarget'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class=\'btn btn-primary ';
                $value = $this->resolveValue($context->find('contentAclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\' data-animation=\'animated ';
                $value = $this->resolveValue($context->find('contentAnimation'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\'>
';
                $buffer .= $indent . '                                                            ';
                $value = $this->resolveValue($context->find('btntxt'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                                                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9aa20f31413d6641d7f9f4a05ef16b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                            <div class="heading-content">
                                                {{#caption}}
                                                    <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                                {{/caption}}
                                                <br>
                                                {{#desc}}
                                                    <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                                {{/desc}}
                                                <div class="link-button">
                                                    {{#btntxt}}
                                                        <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                            {{btntxt}}
                                                        </a>
                                                    {{/btntxt}}
                                                </div>
                                            </div>
                                        </div>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <div class="slide-text content_overlayer ';
                $value = $this->resolveValue($context->find('contentClass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" style="width:';
                $value = $this->resolveValue($context->find('contentwidth'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';">
';
                $buffer .= $indent . '                                            <div class="heading-content">
';
                $value = $context->find('caption');
                $buffer .= $this->sectionC16f5a01ab0de7a8e123fb043bcf5478($context, $indent, $value);
                $buffer .= $indent . '                                                <br>
';
                $value = $context->find('desc');
                $buffer .= $this->sectionFfcc64aa415bad69687fd06c1c63c605($context, $indent, $value);
                $buffer .= $indent . '                                                <div class="link-button">
';
                $value = $context->find('btntxt');
                $buffer .= $this->section0c0ec8c0ed7882b04f72a2593caa6c53($context, $indent, $value);
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90f0bb222f62ac3297eaaa25227ed1c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="homecarousel-slide-item carousel-item">
                                <div class="slide-item slide-content {{overlayClass}}">
                                    <div class="slide-main-background">
                                        {{#slideimg}}
                                            <img src="{{{slideimg}}}" class="slide-image">
                                        {{/slideimg}}
                                    </div>
                                    {{! Slide content }}
                                    {{#slidecontentstatus}}
                                        <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                            <div class="heading-content">
                                                {{#caption}}
                                                    <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                                {{/caption}}
                                                <br>
                                                {{#desc}}
                                                    <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                                {{/desc}}
                                                <div class="link-button">
                                                    {{#btntxt}}
                                                        <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                            {{btntxt}}
                                                        </a>
                                                    {{/btntxt}}
                                                </div>
                                            </div>
                                        </div>
                                    {{/slidecontentstatus}}
                                </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="homecarousel-slide-item carousel-item">
';
                $buffer .= $indent . '                                <div class="slide-item slide-content ';
                $value = $this->resolveValue($context->find('overlayClass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="slide-main-background">
';
                $value = $context->find('slideimg');
                $buffer .= $this->sectionEe6cf9f04d9195ee7ff6b075eb215808($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $value = $context->find('slidecontentstatus');
                $buffer .= $this->sectionB9aa20f31413d6641d7f9f4a05ef16b4($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85039017246392242902d94584521004(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#slideimg}}
                            <div class="homecarousel-slide-item carousel-item">
                                <div class="slide-item slide-content {{overlayClass}}">
                                    <div class="slide-main-background">
                                        {{#slideimg}}
                                            <img src="{{{slideimg}}}" class="slide-image">
                                        {{/slideimg}}
                                    </div>
                                    {{! Slide content }}
                                    {{#slidecontentstatus}}
                                        <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                            <div class="heading-content">
                                                {{#caption}}
                                                    <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                                {{/caption}}
                                                <br>
                                                {{#desc}}
                                                    <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                                {{/desc}}
                                                <div class="link-button">
                                                    {{#btntxt}}
                                                        <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                            {{btntxt}}
                                                        </a>
                                                    {{/btntxt}}
                                                </div>
                                            </div>
                                        </div>
                                    {{/slidecontentstatus}}
                                </div>
                            </div>
                        {{/slideimg}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('slideimg');
                $buffer .= $this->section90f0bb222f62ac3297eaaa25227ed1c6($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0fb7372eee64cf4687daf1a4aabeb2d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#slidestatus}}
                        {{#slideimg}}
                            <div class="homecarousel-slide-item carousel-item">
                                <div class="slide-item slide-content {{overlayClass}}">
                                    <div class="slide-main-background">
                                        {{#slideimg}}
                                            <img src="{{{slideimg}}}" class="slide-image">
                                        {{/slideimg}}
                                    </div>
                                    {{! Slide content }}
                                    {{#slidecontentstatus}}
                                        <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                            <div class="heading-content">
                                                {{#caption}}
                                                    <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                                {{/caption}}
                                                <br>
                                                {{#desc}}
                                                    <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                                {{/desc}}
                                                <div class="link-button">
                                                    {{#btntxt}}
                                                        <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                            {{btntxt}}
                                                        </a>
                                                    {{/btntxt}}
                                                </div>
                                            </div>
                                        </div>
                                    {{/slidecontentstatus}}
                                </div>
                            </div>
                        {{/slideimg}}
                    {{/slidestatus}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('slidestatus');
                $buffer .= $this->section85039017246392242902d94584521004($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd7e93b9747cdb4a6515957f21dd19cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="homepage-carousel">
            {{#numofslide}}
                <a href="#" class="prevBtn carousel-control left"> <span aria-hidden="true"></span> </a>
                <a href="#" class="nextBtn carousel-control right"> <span aria-hidden="true"></span> </a>
            {{/numofslide}}
            <div id="homepage-carousel">
                {{#slides}}
                    {{#slidestatus}}
                        {{#slideimg}}
                            <div class="homecarousel-slide-item carousel-item">
                                <div class="slide-item slide-content {{overlayClass}}">
                                    <div class="slide-main-background">
                                        {{#slideimg}}
                                            <img src="{{{slideimg}}}" class="slide-image">
                                        {{/slideimg}}
                                    </div>
                                    {{! Slide content }}
                                    {{#slidecontentstatus}}
                                        <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                            <div class="heading-content">
                                                {{#caption}}
                                                    <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                                {{/caption}}
                                                <br>
                                                {{#desc}}
                                                    <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                                {{/desc}}
                                                <div class="link-button">
                                                    {{#btntxt}}
                                                        <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                            {{btntxt}}
                                                        </a>
                                                    {{/btntxt}}
                                                </div>
                                            </div>
                                        </div>
                                    {{/slidecontentstatus}}
                                </div>
                            </div>
                        {{/slideimg}}
                    {{/slidestatus}}
                {{/slides}}
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="homepage-carousel">
';
                $value = $context->find('numofslide');
                $buffer .= $this->sectionB40653e9ea30465a0829820da5912400($context, $indent, $value);
                $buffer .= $indent . '            <div id="homepage-carousel">
';
                $value = $context->find('slides');
                $buffer .= $this->section0fb7372eee64cf4687daf1a4aabeb2d9($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84a05f46cfbf0e88da5976e403de3026(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#isblockempty}}
        <div class="custom-alert-block alert alert-warning">
            {{#str}}blockemptymessage, theme_academi{{/str}}
        </div>
    {{/isblockempty}}


    {{#sliderblockstatus}}
        <div class="homepage-carousel">
            {{#numofslide}}
                <a href="#" class="prevBtn carousel-control left"> <span aria-hidden="true"></span> </a>
                <a href="#" class="nextBtn carousel-control right"> <span aria-hidden="true"></span> </a>
            {{/numofslide}}
            <div id="homepage-carousel">
                {{#slides}}
                    {{#slidestatus}}
                        {{#slideimg}}
                            <div class="homecarousel-slide-item carousel-item">
                                <div class="slide-item slide-content {{overlayClass}}">
                                    <div class="slide-main-background">
                                        {{#slideimg}}
                                            <img src="{{{slideimg}}}" class="slide-image">
                                        {{/slideimg}}
                                    </div>
                                    {{! Slide content }}
                                    {{#slidecontentstatus}}
                                        <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                            <div class="heading-content">
                                                {{#caption}}
                                                    <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                                {{/caption}}
                                                <br>
                                                {{#desc}}
                                                    <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                                {{/desc}}
                                                <div class="link-button">
                                                    {{#btntxt}}
                                                        <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                            {{btntxt}}
                                                        </a>
                                                    {{/btntxt}}
                                                </div>
                                            </div>
                                        </div>
                                    {{/slidecontentstatus}}
                                </div>
                            </div>
                        {{/slideimg}}
                    {{/slidestatus}}
                {{/slides}}
            </div>
        </div>
    {{/sliderblockstatus}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isblockempty');
                $buffer .= $this->section6b7e7ef469d5fda15584df7b8e5f4e98($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $value = $context->find('sliderblockstatus');
                $buffer .= $this->sectionEd7e93b9747cdb4a6515957f21dd19cd($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
