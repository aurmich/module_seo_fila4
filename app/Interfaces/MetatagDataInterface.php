<?php

declare(strict_types=1);

namespace Modules\Seo\Interfaces;

<<<<<<< HEAD
use DateTimeInterface;

=======
<<<<<<< HEAD
use DateTimeInterface;

=======
>>>>>>> origin/develop
>>>>>>> 5c32e3c (.)
interface MetatagDataInterface
{
    /**
     * Get the title.
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Get the description.
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Get the keywords.
     *
     * @return string
     */
    public function getKeywords(): string;

    /**
     * Get the colors.
     *
     * @return array<string, string>
     */
    public function getColors(): array;

    /**
     * Get the robots.
     *
     * @return string
     */
    public function getRobots(): string;

    /**
     * Get the canonical URL.
     *
     * @return string|null
     */
    public function getCanonical(): ?string;

    /**
     * Get the image URL.
     *
     * @return string|null
     */
    public function getImage(): ?string;

    /**
     * Get the locale.
     *
     * @return string
     */
    public function getLocale(): string;

    /**
     * Get the type.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Get the site name.
     *
     * @return string
     */
    public function getSiteName(): string;

    /**
     * Get the URL.
     *
     * @return string|null
     */
    public function getUrl(): ?string;

    /**
     * Get the author.
     *
     * @return string|null
     */
    public function getAuthor(): ?string;

    /**
     * Get the published time.
     *
<<<<<<< HEAD
     * @return DateTimeInterface|null
     */
    public function getPublishedTime(): ?DateTimeInterface;
=======
<<<<<<< HEAD
     * @return DateTimeInterface|null
     */
    public function getPublishedTime(): ?DateTimeInterface;
=======
     * @return \DateTimeInterface|null
     */
    public function getPublishedTime(): ?\DateTimeInterface;
>>>>>>> origin/develop
>>>>>>> 5c32e3c (.)

    /**
     * Get the modified time.
     *
<<<<<<< HEAD
     * @return DateTimeInterface|null
     */
    public function getModifiedTime(): ?DateTimeInterface;
=======
<<<<<<< HEAD
     * @return DateTimeInterface|null
     */
    public function getModifiedTime(): ?DateTimeInterface;
=======
     * @return \DateTimeInterface|null
     */
    public function getModifiedTime(): ?\DateTimeInterface;
>>>>>>> origin/develop
>>>>>>> 5c32e3c (.)

    /**
     * Get extra metadata.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function get(string $key, $default = null);

    /**
     * Check if the metadata has a specific key.
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool;
}
