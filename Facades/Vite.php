<?php

namespace QuantaForge\Support\Facades;

/**
 * @method static array preloadedAssets()
 * @method static string|null cspNonce()
 * @method static string useCspNonce(string|null $nonce = null)
 * @method static \QuantaForge\Foundation\Vite useIntegrityKey(string|false $key)
 * @method static \QuantaForge\Foundation\Vite withEntryPoints(array $entryPoints)
 * @method static \QuantaForge\Foundation\Vite useManifestFilename(string $filename)
 * @method static string hotFile()
 * @method static \QuantaForge\Foundation\Vite useHotFile(string $path)
 * @method static \QuantaForge\Foundation\Vite useBuildDirectory(string $path)
 * @method static \QuantaForge\Foundation\Vite useScriptTagAttributes(callable|array $attributes)
 * @method static \QuantaForge\Foundation\Vite useStyleTagAttributes(callable|array $attributes)
 * @method static \QuantaForge\Foundation\Vite usePreloadTagAttributes(callable|array|false $attributes)
 * @method static \QuantaForge\Support\HtmlString|void reactRefresh()
 * @method static string asset(string $asset, string|null $buildDirectory = null)
 * @method static string content(string $asset, string|null $buildDirectory = null)
 * @method static string|null manifestHash(string|null $buildDirectory = null)
 * @method static bool isRunningHot()
 * @method static string toHtml()
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 *
 * @see \QuantaForge\Foundation\Vite
 */
class Vite extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \QuantaForge\Foundation\Vite::class;
    }
}
