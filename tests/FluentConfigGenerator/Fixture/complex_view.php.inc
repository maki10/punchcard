<?php

return [
    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),
];

?>
-----
<?php

final class Complex_viewConfig
{
    private string $compiled;

    public static function create(): self
    {
        return new self();
    }

    public function compiled(string $compiled): self
    {
        $this->compiled = $compiled;
        return $this;
    }

    /**
     * @return array<string, mixed[]>
     */
    public function toArray(): array
    {
        return [
            'compiled' => $this->compiled,
        ];
    }
}