<?php
class Response
{
    public ?int $code = null;
    public ?string $message = null;
    public $data = null;
    public ?string $traceId = null;

    public function __construct()
    {
        $this->traceId = self::generateTraceId();
    }

    private static function generateTraceId(): string
    {
        return bin2hex(random_bytes(16));
    }

    public static function success(): ResponseBuilder
    {
        return (new ResponseBuilder())->buildSuccess();
    }

    public static function failed(): ResponseBuilder
    {
        return (new ResponseBuilder())->buildFailed();
    }

    public static function custom($errorCode): ResponseBuilder
    {
        return (new ResponseBuilder())->buildCustom($errorCode);
    }
}

class ResponseBuilder
{
    private Response $response;

    public function __construct() 
    {
        $this->response = new Response();
    }

    public function buildSuccess(): self
    {
        $this->response->code = 0;
        $this->response->message = 'Success';
        return $this;
    }

    public function buildFailed(): self
    {
        $this->response->code = -1;
        $this->response->message = 'Failed';
        return $this;
    }

    public function buildCustom($errorCode): self
    {
        $this->response->code = $errorCode['code'];
        $this->response->message = $errorCode['message'];
        return $this;
    }

    public function withData($data): self
    {
        $this->response->data = $data;
        return $this;
    }

    public function withMessage(string $message): self
    {
        $this->response->message = $message;
        return $this;
    }

    public function traceId(string $traceId): self
    {
        $this->response->traceId = $traceId;
        return $this;
    }

    public function build(): Response
    {
        return $this->response;
    }
}